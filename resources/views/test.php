<?php
if (substr($validity, -1) == "d") {
    $validity = "   <br>MASA AKTIF   : " . substr($validity, 0, -1) . " HARI";
} else if (substr($validity, -1) == "h") {
    $validity = "MASA AKTIF  : " . substr($validity, 0, -1) . "Jam";
}
if (substr($timelimit, -1) == "d" & strlen($timelimit) > 3) {
    $timelimit = "Durasi:" . ((substr($timelimit, 0, -1) * 7) +  substr($timelimit, 2, 1)) . " HARI";
} else if (substr($timelimit, -1) == "d") {
    $timelimit = "Durasi:" . substr($timelimit, 0, -1) . " HARI";
} else if (substr($timelimit, -1) == "h") {
    $timelimit = "Durasi:" . substr($timelimit, 0, -1) . "Jam";
} else if (substr($timelimit, -1) == "w") {
    $timelimit = "Durasi:" . (substr($timelimit, 0, -1) * 7) . " HARI";
}
if ($mks) {
    $mks = "border:none; width: 210px; height:140px; background: url('https://isbernendi.github.io/thumber/images/simple1.png') no-repeat; background-size:contain;";
} else {w
    $mks = "border:none; width: 210px; height:140px; background:
url('https://isbernendi.github.io/thumber/images/simple1.png') no-repeat; background-size:contain;";
} ?>
<table style="display:inline-block;border-collapse:  collapse;border-radius: 3px;border: 1px solid #444;
margin: 2.5px;width: 130px;overflow:hidden;position:relative;padding: 1px;margin: 0px;border: 1px solid #444; background:<?php echo $mks ?>; ">
    <tbody>
        <tr>
            <td>
                <div style="font-weight:bold;font-weight:bold;margin-top: 5px;margin-left:130px;font-size:18px;padding-left:17px;color:#444 ">
                    <small style="font-size:13px;margin-left:-25px;position:absolute;">Rp.</small><?php echo $getprice; ?>
                </div>
                <div>
                    <?php if ($usermode == "vc") { ?>
                        <div style="text-align:left;margin-top: 8px; margin-left:5px;">
                            <b style="text-align:left;font-size:8px;color:#444; "> Kode Aktivasi<br>
                                <b style="text-align:left;font-size:15px;color:#e80; margin-left: 0px;"><?= $username ?>
                                </b>
                        </div>
                    <?php } elseif ($usermode == "up") { ?>
                        <div style="margin-top: 8px; margin-left:20px;">
                            <b style="text-align:left;font-size:8px;color:#444;">kode aktivasi <br>
                                <b style="text-align:left;font-size:12px;color:#444;margin-left:20px;">U : <?= $username ?> - P : <?= $password; ?></b><?php } ?>
                        </div>
                        <br>
                        <div style="color:#555; margin-top: -25px; margin-left:5px;">
                            <b style="font-size:8px"><?= $validity; ?><br>Login/Logout : <?= $dnsname; ?><br>CS       : 0816646968

                                <div style="margin-top: -60px; margin-left:135px;">
                                    <img style="border: 1px #444 solid; border-radius: 6px; solid  #444;width:60px;height:60px;" <?= $qrcode ?> </div>
                                    <div style="color:#555; margin-top: 16px; margin-left:-5px;">
                                        <b style="font-size:9px"><b>   <?= $hotspotname; ?></b>
                                    </div>
                                    <div style="color:#777; margin-top: -11px; margin-left:170px;">
                                        <b style="font-size:9px"><span id="num"><?= " [$num]"; ?></b>
                                    </div>
                                </div>
            </td>
        </tr>
    </tbody>
</table>
