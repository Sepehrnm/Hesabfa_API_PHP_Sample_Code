<?php
error_reporting(0);
include "../API/class-api.php";
$api = new Ssbhesabfa_Api();
global $result;

    if(isset($_POST["submitRequest"])) {
        $startDate = $_POST["startDate"];
        $endDate = $_POST["endDate"];
        $project = $_POST["project"];

        $data = array(
            'startDate' => $startDate,
            'endDate' => $endDate,
            'project' => $project
        );
        $result = $api->reportBalancesheet($data);
    } else {
        $data = array(
            'startDate' => null,
            'endDate' => null,
            'project' => null
        );
        $result = $api->reportBalancesheet($data);
    }
    $Accounts = $result->{"Result"}->{"Accounts"};
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS%20Files/style.css" />
    <?php include "../Bootstrap/bootstrap.php";?>
    <link rel="icon" href="../assets/hesabfaIcon.png">
    <title>گزارش ترازنامه</title>
</head>
<body>
<div class="container-fluid">
    <?php include '../Navbar Menu/navbar.php'; ?>
</div>
<?php include '../Errors/errorLog.php'; ?>
<br>
<h3>
    گزارش ترازنامه
</h3>
<br>
<form class="save-contact-form" method="post" style="direction: rtl;">
    <div class="halign" style="padding: 0.5rem;">
        <div class="align">
            <label class="form-label" for="startDate">تاریخ شروع</label>
            <input class="form-control" type="text" name="startDate" placeholder="(2023-03-26T00:00:00)">
        </div>
        <div class="align">
            <label class="form-label" for="endDate">تاریخ پایان</label>
            <input class="form-control" type="text" name="endDate" placeholder="(2024-03-25T00:00:00)">
        </div>
        <div class="align">
            <label class="form-label" for="project">نام پروژه</label>
            <input class="form-control" type="text" name="project">
        </div>
    </div>
        <button name="submitRequest" class="btn btn-primary" type="submit">نمایش</button>
</form>
<div class="row">
    <div class="container">
        <div class="col-12">
            <?php if(isset($Accounts)) { ?>

            <table style="text-align: center;" class="table table-striped table-hover">
                <tr>
                    <th><?php echo $Accounts[0]->{"Account"}->{"Name"};?></th>
                    <th><?php echo $Accounts[0]->{"TotalBalance"};?></th>
                </tr>
<!-- دارایی های جاری-->
                <tr style="font-weight: bold;">
                    <td><?php echo($Accounts[0]->{"Children"}[0]->{"Account"}->{"Name"});?></td>
                    <td><?php echo $Accounts[0]->{"Children"}[0]->{"TotalBalance"};?></td>
                </tr>
                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[0]->{"Children"}[0]->{"Children"}[0]->{"Account"}->{"Name"}); ?></td>
                    <td><?php echo($Accounts[0]->{"Children"}[0]->{"Children"}[0]->{"TotalBalance"}); ?></td>
                </tr>
                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[0]->{"Children"}[0]->{"Children"}[1]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[0]->{"Children"}[0]->{"Children"}[1]->{"TotalBalance"}); ?></td>
                </tr>
                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[0]->{"Children"}[0]->{"Children"}[2]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[0]->{"Children"}[0]->{"Children"}[2]->{"TotalBalance"}); ?></td>
                </tr>
                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[0]->{"Children"}[0]->{"Children"}[3]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[0]->{"Children"}[0]->{"Children"}[3]->{"TotalBalance"}); ?></td>
                </tr>
                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[0]->{"Children"}[0]->{"Children"}[4]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[0]->{"Children"}[0]->{"Children"}[4]->{"TotalBalance"}); ?></td>
                </tr>
                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[0]->{"Children"}[0]->{"Children"}[5]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[0]->{"Children"}[0]->{"Children"}[5]->{"TotalBalance"}); ?></td>
                </tr>
                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[0]->{"Children"}[0]->{"Children"}[6]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[0]->{"Children"}[0]->{"Children"}[6]->{"TotalBalance"}); ?></td>
                </tr>
<!---->
<!--دارایی های غیر جاری-->
                <tr>
                    <th><?php echo($Accounts[0]->{"Children"}[1]->{"Account"}->{"Name"});?></th>
                    <th><?php echo $Accounts[0]->{"Children"}[1]->{"TotalBalance"};?></th>
                </tr>

                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[0]->{"Children"}[1]->{"Children"}[0]->{"Account"}->{"Name"}); ?></td>
                    <td><?php echo($Accounts[0]->{"Children"}[1]->{"Children"}[0]->{"TotalBalance"}); ?></td>
                </tr>
                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[0]->{"Children"}[1]->{"Children"}[1]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[0]->{"Children"}[1]->{"Children"}[1]->{"TotalBalance"}); ?></td>
                </tr>
                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[0]->{"Children"}[1]->{"Children"}[2]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[0]->{"Children"}[1]->{"Children"}[2]->{"TotalBalance"}); ?></td>
                </tr>
                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[0]->{"Children"}[1]->{"Children"}[3]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[0]->{"Children"}[1]->{"Children"}[3]->{"TotalBalance"}); ?></td>
                </tr>
<!---->
<!-- بدهی جاری-->
                <tr>
                    <th><?php echo $Accounts[1]->{"Account"}->{"Name"};?></th>
                    <th><?php echo $Accounts[1]->{"TotalBalance"};?></th>
                </tr>
                <tr style="font-weight: bold;">
                    <td><?php echo($Accounts[1]->{"Children"}[0]->{"Account"}->{"Name"});?></td>
                    <td><?php echo $Accounts[1]->{"Children"}[0]->{"TotalBalance"};?></td>
                </tr>

                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[1]->{"Children"}[0]->{"Children"}[0]->{"Account"}->{"Name"}); ?></td>
                    <td><?php echo($Accounts[1]->{"Children"}[0]->{"Children"}[0]->{"TotalBalance"}); ?></td>
                </tr>
                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[1]->{"Children"}[0]->{"Children"}[1]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[1]->{"Children"}[0]->{"Children"}[1]->{"TotalBalance"}); ?></td>
                </tr>
                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[1]->{"Children"}[0]->{"Children"}[2]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[1]->{"Children"}[0]->{"Children"}[2]->{"TotalBalance"}); ?></td>
                </tr>
                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[1]->{"Children"}[0]->{"Children"}[3]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[1]->{"Children"}[0]->{"Children"}[3]->{"TotalBalance"}); ?></td>
                </tr>
                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[1]->{"Children"}[0]->{"Children"}[4]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[1]->{"Children"}[0]->{"Children"}[4]->{"TotalBalance"}); ?></td>
                </tr>
<!---->

<!-- بدهی غیر جاری-->
                <tr style="font-weight: bold;">
                    <td><?php echo($Accounts[1]->{"Children"}[1]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[1]->{"Children"}[1]->{"TotalBalance"}); ?></td>
                </tr>
                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[1]->{"Children"}[1]->{"Children"}[0]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[1]->{"Children"}[1]->{"Children"}[0]->{"TotalBalance"}); ?></td>
                </tr>

                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[1]->{"Children"}[1]->{"Children"}[1]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[1]->{"Children"}[1]->{"Children"}[1]->{"TotalBalance"}); ?></td>
                </tr>

                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[1]->{"Children"}[1]->{"Children"}[2]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[1]->{"Children"}[1]->{"Children"}[2]->{"TotalBalance"}); ?></td>
                </tr>
<!---->

<!-- حقوق صاحبان سهام-->
                <tr style="font-weight: bold;">
                    <th><?php echo($Accounts[2]->{"Account"}->{"Name"});?></th>
                    <th><?php echo($Accounts[2]->{"TotalBalance"} + $result->{"Result"}->ProfitOrLoss) ;?></th>
                </tr>
                <tr style="font-weight: bold;">
                    <td style="padding-right: 1rem;"><?php echo($Accounts[2]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[2]->{"TotalBalance"}); ?></td>
                </tr>
                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[2]->{"Children"}[0]->{"Children"}[0]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[2]->{"Children"}[0]->{"Children"}[0]->{"TotalBalance"}); ?></td>
                </tr>

                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[2]->{"Children"}[0]->{"Children"}[1]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[2]->{"Children"}[0]->{"Children"}[1]->{"TotalBalance"}); ?></td>
                </tr>

                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[2]->{"Children"}[0]->{"Children"}[2]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[2]->{"Children"}[0]->{"Children"}[2]->{"TotalBalance"}); ?></td>
                </tr>

                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[2]->{"Children"}[0]->{"Children"}[3]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[2]->{"Children"}[0]->{"Children"}[3]->{"TotalBalance"}); ?></td>
                </tr>

                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[2]->{"Children"}[0]->{"Children"}[4]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[2]->{"Children"}[0]->{"Children"}[4]->{"TotalBalance"}); ?></td>
                </tr>

                <tr>
                    <td style="padding-right: 2rem;"><?php echo($Accounts[2]->{"Children"}[0]->{"Children"}[5]->{"Account"}->{"Name"});?></td>
                    <td><?php echo($Accounts[2]->{"Children"}[0]->{"Children"}[5]->{"TotalBalance"}); ?></td>
                </tr>
                <tr style="font-weight: bold;">
                    <td>سود یا زیان</td>
                    <td><?php echo($result->{"Result"}->ProfitOrLoss); ?></td>
                </tr>
            <!---->
            </table>
            <?php }?>
        </div>
    </div>
</div>
</body>
</html>
