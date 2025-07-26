<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Pembayaran</title>
    <style>
        @page {
    margin: 50px 25px 80px 25px;
}

body {
    font-family: sans-serif;
    font-size: 12px;
    color: #333;
    position: relative;
    min-height: 100%;
    padding-bottom: 80px;
}

        h2 {
            text-align: center;
            margin-bottom: 5px;
        }

        .filter-info {
            margin: 10px 0 20px;
            font-size: 12px;
        }

        .filter-info div {
            margin-bottom: 3px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 11px;
        }

        th, td {
            border: 1px solid #000;
            padding: 6px;
        }

        th {
            background-color: #f0f0f0;
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .footer {
    position: fixed;
    bottom: 30px;
    left: 0;
    right: 0;
    text-align: center;
    font-size: 10px;
    color: #777;
}

        .total-row {
            background-color: #f0f0f0;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Data Pembayaran</h2>

<?php
    $from = $filters['tanggal']['from'] ?? null;
    $until = $filters['tanggal']['until'] ?? null;
    $total = $pembayarans->sum('jumlah');
?>

<div class="filter-info">
    <strong>Cabang:</strong> <?php echo e($namaCabang); ?><br>
    <strong>Tanggal:</strong>
    <?php echo e($from ? \Carbon\Carbon::parse($from)->format('d-m-Y') : '...'); ?> s/d
    <?php echo e($until ? \Carbon\Carbon::parse($until)->format('d-m-Y') : '...'); ?>

</div>

<table>
    <thead>
        <tr>
            <th>Nama Penghuni</th>
            <th>No. Kamar</th>
            <th>Cabang</th>
            <th>Jenis Pembayaran</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $pembayarans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($p->penghuni->nama); ?></td>
            <td><?php echo e($p->penghuni->kamar->nomor_kamar ?? '-'); ?></td>
            <td><?php echo e($p->penghuni->kamar->kost->nama ?? '-'); ?></td>
            <td class="text-center"><?php echo e(ucfirst($p->jenis ?? '-')); ?></td>
            <td><?php echo e(\Carbon\Carbon::parse($p->tanggal_pembayaran)->format('d-m-Y')); ?></td>
            <td class="text-right">Rp <?php echo e(number_format($p->jumlah, 2, ',', '.')); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr class="total-row">
            <td class="text-center" colspan="5">Total</td>
            <td class="text-right">Rp <?php echo e(number_format($total, 2, ',', '.')); ?></td>
        </tr>
    </tbody>
</table>


<div class="footer">
    Dicetak pada: <?php echo e(\Carbon\Carbon::now()->format('d-m-Y H:i')); ?>

</div>

</body>
</html>
<?php /**PATH /home/ridho/Videos/projek/rumah-pelangi/resources/views/exports/pembayaran-pdf.blade.php ENDPATH**/ ?>