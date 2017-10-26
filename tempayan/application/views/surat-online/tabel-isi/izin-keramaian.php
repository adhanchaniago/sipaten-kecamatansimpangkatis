<table class="table table-bordered">
    <tbody>
        <tr style="vertical-align: top" class="bg-warning">
            <td colspan="3" class="text-center">Surat Pengantar dari Desa </td>
        </tr>
        <tr style="vertical-align: top">
            <td width="130"><strong>Desa</strong></td>
            <td class="text-center" style="width: 30px;">:</td>
            <td><?php echo @$get->isi->desa; ?></td>
        </tr>
        <tr style="vertical-align: top">
            <td width="100"><strong>No. Surat</strong></td>
            <td class="text-center" style="width: 30px;">:</td>
            <td><?php echo @$get->isi->no_surat_rek ?></td>
        </tr>
        <tr style="vertical-align: top">
            <td width="100"><strong>Tanggal Surat</strong></td>
            <td class="text-center" style="width: 30px;">:</td>
            <td><?php echo @date_id( $get->isi->tgl_surat_rek ); ?></td>
        </tr>
        <tr style="vertical-align: top">
            <td width="100"><strong>Ditandatangani</strong></td>
            <td class="text-center" style="width: 30px;">:</td>
            <td><?php echo @$get->isi->pejabat_lurah." - ".@$get->isi->jabatan_pejabat_lurah; ?> <br><?php echo @$get->isi->nip_pejabat_lurah; ?></td>
        </tr>
        <tr style="vertical-align: top" class="bg-warning">
            <td colspan="3" class="text-center">Ketarangan Keperluan Izin Keramaian</td>
        </tr>
        <tr style="vertical-align: top">
            <td width="100"><strong>Keperluan</strong></td>
            <td class="text-center" style="width: 30px;">:</td>
            <td><?php echo strtoupper(@$get->isi->keperluan) ?></td>
        </tr>
        <tr style="vertical-align: top">
            <td width="100"><strong>Tanggal & Waktu</strong></td>
            <td class="text-center" style="width: 30px;">:</td>
            <td><?php echo ucfirst(@$get->isi->hari).', '.date_id(@$get->isi->tgl_acara). '<br>'.$get->isi->waktu; ?></td>
        </tr>
        <tr style="vertical-align: top">
            <td width="100"><strong>Tempat</strong></td>
            <td class="text-center" style="width: 30px;">:</td>
            <td><?php echo strtoupper(@$get->isi->tempat) ?></td>
        </tr>
        <tr style="vertical-align: top">
            <td width="100"><strong>Hiburan / Keramaian</strong></td>
            <td class="text-center" style="width: 30px;">:</td>
            <td><?php echo strtoupper(@$get->isi->hiburan) ?></td>
        </tr>
    </tbody>
</table>