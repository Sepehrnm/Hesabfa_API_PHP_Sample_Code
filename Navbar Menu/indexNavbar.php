<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./CSS%20Files/style.css" />
</head>
<body>
<nav>
    <ul>
        <li>
            <img style="width: 40px;height: 40px" src="./assets/hesabfaIcon.png" alt="hesabfaIcon">
            <img style="width: 70px;height: 60px" src="./assets/hesabfa-logo.png" alt="logo">
        </li>

        <li class="home-list">
            <a href="./index.php">خانه</a>
        </li>

        <li class="home-list">
            <a href="./Errors/errors.php">جدول کدهای خطا</a>
        </li>

        <li class="dropdown">
            <button class="dropbtn">متد های کالاها و خدمات</button>
            <div class="dropdown-content">
                <a href="./Products%20and%20Services/getProduct.php">دریافت</a>
                <a href="./Products%20and%20Services/saveProduct.php">ذخیره</a>
                <a href="./Products%20and%20Services/getProductByBarcode.php">دریافت از طریق بارکد</a>
                <a href="./Products%20and%20Services/getProductById.php">دریافت از طریق Id</a>
                <a href="./Products%20and%20Services/products.php">دریافت لیست</a>
                <a href="./Products%20and%20Services/deleteProduct.php">حذف</a>
                <a href="./Products%20and%20Services/getQuantity.php">لیست موجودی کالاها</a>
                <a href="./Products%20and%20Services/updateOpeningQuantity.php">به روز رسانی موجودی اول دوره کالاها</a>
            </div>
        </li>

        <li class="dropdown">
            <button class="dropbtn">متد های فاکتور</button>
            <div class="dropdown-content">
                <a href="./Invoices%20Methods/saveInvoice.php">ذخیره فاکتور</a>
                <a href="./Invoices%20Methods/deleteInvoice.php">حذف فاکتور</a>
                <a href="./Invoices%20Methods/getInvoices.php">دریافت لیست</a>
                <a href="./Invoices%20Methods/getInvoice.php">دریافت فاکتور</a>
                <a href="./Invoices%20Methods/savePayment.php"> ثبت دریافت و پرداخت فاکتور</a>
                <a href="./Invoices%20Methods/getInvoiceById.php">دریافت از طریق Id</a>
                <a href="./Invoices%20Methods/getOnlineInvoiceUrl.php">دریافت URL فاکتور آنلاین</a>
                <a href="./Invoices%20Methods/saveWarehouseReceipt.php">ذخیره حواله انبار</a>
            </div>
        </li>

        <li class="dropdown">
            <button class="dropbtn">متد های اشخاص</button>
            <div class="dropdown-content">
                <a href="./Contacts%20Methods/getContact.php">دریافت</a>
                <a href="./Contacts%20Methods/getContacts.php">دریافت لیست</a>
                <a href="./Contacts%20Methods/getContactById.php">دریافت از طریق Id</a>
                <a href="./Contacts%20Methods/saveContact.php">ذخیره</a>
                <a href="./Contacts%20Methods/deleteContact.php">حذف</a>
                <a href="./Contacts%20Methods/getContactLink.php">لینک کارت حساب</a>
            </div>
        </li>

        <li class="dropdown">
            <button class="dropbtn">متد های دریافت و پرداخت</button>
            <div class="dropdown-content">
                <a href="./Payment%20Receipts%20Methods/getReceipts.php">نمایش لیست رسیدهای دریافت یا پرداخت</a>
                <a href="./Payment%20Receipts%20Methods/getReceipt.php">دریافت رسید دریافت یا پرداخت</a>
                <a href="./Payment%20Receipts%20Methods/saveReceipt.php">ذخیره رسید</a>
                <a href="./Payment%20Receipts%20Methods/deleteReceipt.php">حذف رسید</a>
            </div>
        </li>

        <li class="dropdown">
            <button class="dropbtn">متد های ثبت سند حسابداری</button>
            <div class="dropdown-content">
                <a href="./Accounting%20Methods/getDocument.php">دریافت</a>
                <a href="./Accounting%20Methods/saveDocument.php">ذخیره</a>
                <a href="./Accounting%20Methods/getDocuments.php">دریافت لیست</a>
                <a href="./Accounting%20Methods/deleteDocument.php">حذف سند</a>
            </div>
        </li>

        <li class="dropdown">
            <button class="dropbtn">سایر متدها</button>
            <div class="dropdown-content">
                <a href="./Other%20Methods/getChanges.php">دریافت آخرین تغییرات</a>
                <a href="./Other%20Methods/getFiscalYears.php">دریافت لیست سال مالی</a>
                <a href="./Other%20Methods/getBanks.php">دریافت لیست بانک ها</a>
                <a href="./Other%20Methods/getCashes.php">دریافت لیست صندوق ها</a>
                <a href="./Other%20Methods/getPettyCashes.php">دریافت لیست تنخواه گردان ها</a>
                <a href="./Other%20Methods/getCurrency.php">دریافت واحد پول</a>
                <a href="./Other%20Methods/getWarehouses.php">دریافت لیست انبار ها</a>
                <a href="./Other%20Methods/getProductCategories.php">دریافت لیست دسته بندی کالا ها</a>
                <a href="./Other%20Methods/getServiceCategories.php">دریافت لیست دسته بندی خدمات</a>
                <a href="./Other%20Methods/getContactCategories.php">دریافت لیست دسته بندی اشخاص</a>
                <a href="./Other%20Methods/getFiscalYear.php">دریافت اطلاعات سال مالی جاری</a>
                <a href="./Other%20Methods/getProjects.php">دریافت لیست پروژه ها</a>
                <a href="./Other%20Methods/getSalesmen.php">دریافت لیست فروشنده ها</a>
                <a href="./Other%20Methods/getCurrencyTable.php">دریافت جدول نرخ برابری ارزها</a>
                <a href="./Other%20Methods/setCurrencyTable.php">تنظیم جدول نرخ برابری ارزها</a>
                <a href="./Other%20Methods/getAccounts.php">دریافت جدول حساب ها</a>
                <a href="./Other%20Methods/getBusinessInfo.php">دریافت اطلاعات کسب و کار</a>
            </div>
        </li>

        <li class="dropdown">
            <button class="dropbtn">متد های دریافت گزارش</button>
            <div class="dropdown-content">
                <a href="./Reports%20Methods/balancesheet.php">گزارش ترازنامه</a>
                <a href="./Reports%20Methods/debtorscreditors.php">گزارش بدهکاران و بستانکاران</a>
                <a href="./Reports%20Methods/profitAndLossStatement.php"> گزارش صورت سود و زیان</a>
                <a href="./Reports%20Methods/reportInventory.php">گزارش موجودی کالا</a>
                <a href="./Reports%20Methods/trialBalance.php">گزارش تراز آزمایشی</a>
                <a href="./Reports%20Methods/trialBalanceItems.php">گزارش آیتم های تفضیلی تراز آزمایشی</a>
            </div>
        </li>
    </ul>
</nav>
<script type='text/javascript'>
    function init() {
        $('button.dropbtn').on('click', (e) => {
            $(".dropdown-content").slideUp();
            $(e.target).next().stop().slideToggle();
        });
    }

    $( document ).ready(() => {
        init();
    });

    var path = window.location.href.substring(window.location.href.lastIndexOf('/') + 1);
    $('a[href="./' + path + '"]').parent().slideDown();
</script>