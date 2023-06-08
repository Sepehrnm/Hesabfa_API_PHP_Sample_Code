<?php
error_reporting(0);
include '../API/class-api.php';
$api = new Ssbhesabfa_Api();
global $i, $rpp, $result, $data;
$i=0;
$rpp=10;

if(isset($_POST["submitTrialBalance"])) {
    $startDate = $_POST["startDate"];
    $endDate = $_POST["endDate"];
    $project = $_POST["project"];

    $data = array(
        'startDate' => $startDate ? : null,
        'endDate' => $endDate ? : null,
        'project' => $project ? : null
    );
    $result = $api->reportTrialBalance($data);
}

$data = array(
    'startDate' => null,
    'endDate' => null,
    'project' => null
);
$result = $api->reportTrialBalance($data);

$totalCount = (count($result->{"Result"}));
    $totalCount%10 !=0 ? $totalCount+=10 : $totalCount;

if(isset($_POST["buttonSubmit"])) {
    for($j=0 ; $j<=(($totalCount)/10) ; $j++) {
        if(isset($_POST["buttonSubmit"][$j])) {
            $value = $_POST["buttonInput"][$j];
            $rpp = ($value * 10);
            $i = ($rpp - 10);

            $result = $api->reportTrialBalance($data);
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS%20Files/style.css" />
    <?php include "../Bootstrap/bootstrap.php";?>
    <link rel="icon" href="../assets/hesabfaIcon.png">
    <title>گزارش تراز آزمایشی</title>
</head>
<body>
<div class="container-fluid">
    <?php include '../Navbar Menu/navbar.php'; ?>
</div>
<?php include '../Errors/errorLog.php'; ?>
<br>
<h3>
    گزارش تراز آزمایشی
</h3>
<br>
<form method="post" style="direction: rtl;" class="save-contact-form">
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
            <label class="form-label" for="project">پروژه</label>
            <input class="form-control" type="text" name="project">
        </div>
    </div>
        <button name="submitTrialBalance" class="btn btn-primary" type="submit">نمایش</button>
</form>
<?php if(isset($result)) { $items = $result->{'Result'};
?>
<div class="row">
    <div class="container">
        <div class="col-12 table-responsive">
            <table class="table table-striped table-hover">
                <th>نام حساب</th>
                <th>مسیر حساب</th>
                <th>نوع حساب</th>
                <th>نوع حساب اصلی</th>
                <th>گردش بدهکار</th>
                <th>گردش بستانکار</th>
                <th>تراز حساب</th>
                <th>ماهیت حساب</th>
                <th>تراز افتتاحیه - بدهکار</th>
                <th>تراز افتتاحیه - بستانکار</th>
                <th>مانده از قبل - بدهکار</th>
                <th>مانده از قبل - بستانکار</th>

                <?php for($j=$i ; $j<$rpp ; $j++)  {
                    if($items[$j]->{"Account"}->Name) { ?>
                    <tr>
                        <td><?php echo $items[$j]->{"Account"}->Name; ?></td>
                        <td><?php echo $items[$j]->{"Account"}->Path; ?></td>
                        <td><?php echo $items[$j]->{"Account"}->AccountType; ?></td>
                        <td><?php echo $items[$j]->{"Account"}->MainAccountType; ?></td>
                        <td><?php echo $items[$j]->{"Debit"}; ?></td>
                        <td><?php echo $items[$j]->{"Credit"}; ?></td>
                        <td><?php echo $items[$j]->{"Balance"}; ?></td>
                        <td><?php echo $items[$j]->{"BalanceType"}; ?></td>
                        <td><?php echo $items[$j]->{"OpeningDebit"}; ?></td>
                        <td><?php echo $items[$j]->{"OpeningCredit"}; ?></td>
                        <td><?php echo $items[$j]->{"RemainingDebit"}; ?></td>
                        <td><?php echo $items[$j]->{"RemainingCredit"}; ?></td>

                    </tr>
                <?php   } } } else {echo "چیزی برای نمایش نیست";}?>
            </table>
            <form method="post">
                <div class="button-container">
                    <?php
                    for($z=1 ; $z<=($totalCount/10) ; $z++) {
                        ?>
                        <button type="submit" name="buttonSubmit[<?php echo $z;?>]" class="buttonInput btn btn-primary" value="<?php echo $z;?>"><?php echo $z;?>
                            <input name="buttonInput[<?php echo $z;?>]" type="hidden" value="<?php echo $z;?>" />
                        </button>
                    <?php } ?>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>