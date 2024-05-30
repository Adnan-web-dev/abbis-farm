<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForeignKeyToFinanceTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('finance_transfers', function (Blueprint $table) {
            $table->dropForeign('finance_transfers_company_id_foreign');
            $table->dropForeign('finance_transfers_from_account_id_foreign');
            $table->dropForeign('finance_transfers_payment_method_id_foreign');

            $table->foreign('company_id', 'finance_transfers_company_id_foreign')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('from_account_id', 'finance_transfers_from_account_id_foreign')->references('id')->on('finance_bank_cashes')->onDelete('cascade');
            $table->foreign('payment_method_id', 'finance_transfers_payment_method_id_foreign')->references('id')->on('payment_methods')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('finance_transfers', function (Blueprint $table) {
            $table->dropForeign('finance_transfers_company_id_foreign');
            $table->dropForeign('finance_transfers_from_account_id_foreign');
            $table->dropForeign('finance_transfers_payment_method_id_foreign');

            $table->foreign('company_id', 'finance_transfers_company_id_foreign')->references('id')->on('companies')->onDelete('set NULL');
            $table->foreign('from_account_id', 'finance_transfers_from_account_id_foreign')->references('id')->on('finance_bank_cashes')->onDelete('set NULL');
            $table->foreign('payment_method_id', 'finance_transfers_payment_method_id_foreign')->references('id')->on('payment_methods')->onDelete('set NULL');
        });
    }
}
