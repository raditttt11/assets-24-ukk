<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
            CREATE TRIGGER TR_minjam_AI
            AFTER INSERT
            ON minjam FOR EACH ROW
            BEGIN
                UPDATE buku SET stok = stok - NEW.jml_pinjam
                WHERE id = NEW.id_buku;
            END;
        ');

        DB::unprepared('
            CREATE TRIGGER TR_peminjaman_AU
            AFTER UPDATE
            ON minjam FOR EACH ROW
            BEGIN
                UPDATE buku SET stok = stok + OLD.jml_pinjam
                WHERE id = OLD.id_buku;
                UPDATE buku SET stok = stok - NEW.jml_pinjam
                WHERE id = NEW.id_buku;
            END;
        ');

        DB::unprepared('
            CREATE TRIGGER TR_peminjaman_dikembalikan_AU
            AFTER UPDATE
            ON minjam FOR EACH ROW
            BEGIN
                IF(NEW.status = "dikembalikan") THEN
                UPDATE buku SET stok = stok + OLD.jml_pinjam
                WHERE id = OLD.id_buku;
               END IF;
            END;
        ');

        DB::unprepared('
            CREATE TRIGGER TR_peminjaman_AD
            AFTER DELETE
            ON minjam FOR EACH ROW
            BEGIN
                UPDATE buku SET stok = stok + OLD.jml_pinjam
                WHERE id = OLD.id_buku;
            END;
    ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trigger_peminjaman_for_buku');
    }
};
