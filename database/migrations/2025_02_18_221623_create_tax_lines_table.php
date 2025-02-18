<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tax_lines', function (Blueprint $table) {
            $table->id();
            $table->string('masa_pajak');
            $table->year('tahun_pajak');
            $table->unsignedBigInteger('organization_id');
            $table->string('nama_wp');
            $table->text('alamat');
            $table->string('npwp');
            $table->string('jenis_pajak');
            $table->string('invoice_number')->nullable();
            $table->string('nomor_faktur_pajak')->nullable();
            $table->date('tanggal_faktur_pajak')->nullable();
            $table->string('no_bukti_potong')->nullable();
            $table->date('tgl_bukti_potong')->nullable();
            $table->string('gl_account')->nullable();
            $table->string('kode_pajak');
            $table->decimal('dpp', 15, 2);
            $table->decimal('tarif', 5, 2); // tarif_(%)
            $table->decimal('jumlah_potong', 15, 2);
            $table->string('npwp_pemotong')->nullable();
            $table->string('nama_pemotong')->nullable();
            $table->boolean('wp_luar_negeri')->default(false);
            $table->string('kode_negara')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tax_lines');
    }
};
