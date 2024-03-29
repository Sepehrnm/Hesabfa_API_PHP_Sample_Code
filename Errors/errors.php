<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>جدول کد های خطا در API حسابفا</title>
    <?php include '../Bootstrap/SharedLinks.php'; ?>
    <link rel="icon" href="../assets/hesabfaIcon.png">
</head>
<body>
<div class="container-fluid">
    <?php include '../Navbar Menu/navbar.php'; ?>
</div>
<div id="render">
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                    <th colspan="3" style="color:#707070;"><h3>جدول کد های خطا</h3></th>
                    <tr>
                        <th colspan="3" style="color:#707070;">لیست کد های خطا در سرویس API حسابفا در زیر ذکر شده اند.</th>
                    </tr>
                </thead>
                <tr>
                    <th>کد</th>
                    <th>خطا</th>
                    <th>شرح</th>
                </tr>
                <tr>
                    <th>100</th>
                    <td>InternalServerError</td>
                    <td>خطای داخلی در نرم افزار</td>
                </tr>

                <tr>
                    <th>101</th>
                    <td>TooManyRequests</td>
                    <td>تعداد در خواست ها در دقیقه از حد مجاز بیشتر شده است</td>
                </tr>

                <tr>
                    <th>103</th>
                    <td>MissingData</td>
                    <td>در درخواست ارسالی پارامتر Data وجود ندارد</td>
                </tr>

                <tr>
                    <th>104</th>
                    <td>MissingParameter</td>
                    <td>پارامتر ضروری ارسال نشده است. برای اطلاعات بیشتر به فیلد ErrorMessage نگاه کنید</td>
                </tr>

                <tr>
                    <th>105</th>
                    <td>ApiDisabled</td>
                    <td>API غیرفعال است</td>
                </tr>

                <tr>
                    <th>106</th>
                    <td>UserIsNotOwner</td>
                    <td>کاربر، صاحب کسب و کار نیست</td>
                </tr>

                <tr>
                    <th>107</th>
                    <td>BusinessNotFound</td>
                    <td>کسب و کار پیدا نشد</td>
                </tr>

                <tr>
                    <th>108</th>
                    <td>BusinessExpired</td>
                    <td>کسب و کار منقضی شده است</td>
                </tr>

                <tr>
                    <th>109</th>
                    <td>FinanYearNotFound</td>
                    <td>سال مالی پیدا نشد</td>
                </tr>

                <tr>
                    <th>110</th>
                    <td>IdMustBeZero</td>
                    <td>Id شی ارسالی باید صفر باشد</td>
                </tr>

                <tr>
                    <th>111</th>
                    <td>IdMustNotBeZero</td>
                    <td>Id شی ارسالی نباید صفر باشد</td>
                </tr>

                <tr>
                    <th>112</th>
                    <td>ObjectNotFound</td>
                    <td>شی درخواستی پیدا نشد. برای اطلاعات بیشتر به فیلد ErrorMessage نگاه کنید</td>
                </tr>

                <tr>
                    <th>113</th>
                    <td>MissingApiKey</td>
                    <td>ApiKey ارسال نشده است</td>
                </tr>

                <tr>
                    <th>114</th>
                    <td>ParameterIsOutOfRange</td>
                    <td>پارامتر خارج از رنج است. برای اطلاعات بیشتر به فیلد ErrorMessage نگاه کنید</td>
                </tr>

                <tr>
                    <th>190</th>
                    <td>ApplicationError</td>
                    <td>خطای حسابفا. برای اطلاعات بیشتر به فیلد ErrorMessage نگاه کنید</td>
                </tr>

            </table>
        </div>
    </div>
</div>
</div>
</body>
</html>