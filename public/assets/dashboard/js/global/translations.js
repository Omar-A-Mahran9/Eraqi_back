const __ = (word) => {
    let locale = document.querySelector("html").getAttribute("lang") || "ar";
    if (locale === "ar") return translations[locale][word] ?? word;
    else return word;
};

let translations = {
    ar: {
        "Add new blog": "أضف مدونة جديدة",
        "Please wait...": "يرجى الانتظار...",
        "Are you sure from deleting this ": "هل انت متاكد من حذف  ",
        "Edit blog": "تعديل المدونة",
        "Edit packageCategories": "تعديل فئة الباقة",
        "Add package category": "أضف فئة باقة جديدة",
        "Add package": "أضف باقة جديدة",
        "Add Car Price": "أضف سعر سيارة",
        "Edit car price": "تعديل سعر السيارة",
        "Add new Common Question": "اضافة سؤال ",
        "Edit Question": "تعديل السوال",
        "Add Payment ways": "أضف خيارات الدفع",
        "Add Payment parteners": "أضف شريك",
        "Yes, Delete !": "نعــم, أحذف !",
        "No, Cancel": "لا , ألغي",
        "something went wrong": "حدث خطأ ما",
        "Error !": "خطـأ !",
        "Operation done successfully": "تمت العملية بنجاح",
        "This action is unauthorized.": "ليس لديك صلاحية لهذا الاجراء",
        "Loading...": "تحميل...",
        Actions: "الإجراءات",
        "Add shipping data": "أضف بيانات الشحن",
        Approve: "موافقة",
        Reject: "رفض",
        "Vendor approved successfully": "تم قبول التاجر بنجاح",
        "Vendor rejected": "تم رفض التاجر",
        Edit: "تعديل",
        per_hour: "رحلة بالساعة",
        per_trip: "رحلة",
        Show: "التفاصيل",
        admin: "الموظف",
        Delete: "حذف",
        "Add new design type": "أضف نوع تصميم جديد",
        caliber: "عيار",
        Caliber: "عيار",
        "Edit design type": "تعديل نوع التصميم",
        "Are you sure you want to delete this": "هل أنت متأكد من حذف هذا ",
        "?": "؟",
        "No data available in table": "لا يوجد بيانات",
        "deleting now ...": "يتم الحذف الأن ...",
        "All data related to this": "جميع البيانات المرتبطة ب",
        "will be deleted": "سوف يتم حذفها",
        Restore: "استرجاع",
        "You have restored the": "تم استرجاع",
        "No results found": "لا يوجد نتائج للعرض",
        "You have deleted the": "تم حذف",
        "was not deleted !": "لم يتم الحذف !",
        "successfully !": "بنجاح !",
        Showing: "عرض",
        to: "إلى",
        records: "صفوف",
        "of total": "من إجمالي",
        "Showing no records": "عدد الصفوف المعروضة",
        "Processing...": "جار تحميل البيانات",
        of: "من",
        item: "العنصر",
        "The results could not be loaded.": "لا يمكن عرض النتائج",
        "Please delete ": "برجاء الحذف",
        " character": " حرف",
        "Please enter ": "برجاء ادخال ",
        " or more characters": " او اكثر من حرف",
        "Loading more results…": "تحميل المزيد من البيانات",
        "You can only select ": "يمكنك اختيار ",
        " item": " عنصر",
        "No results found": "لا يوجد نتائج",
        "Searching…": "جار البحث ...",
        "Remove all items": "حذف الجميع",
        "Remove item": "حذف",
        Search: "ابحث",
        active: "فعال",
        inactive: "غير فعال",
        expired: "منتهي الصلاحية",
        ads: "اعلان",
        membership: "عضوية",
        rejected: "مرفوض",
        approved: "فعال",
        pending: "قيد الانتظار",
        saturday: "السبت",
        sunday: "الأحد",
        monday: "الإثنين",
        tuesday: "الثلاثاء",
        wednesday: "الأربعاء",
        thursday: "الخميس",
        friday: "الجمعة",
        row: "صفوف ",
        rows: "صفوف ",
        " selected": "محددة",
        male: "ذكر",
        female: "انثى",
        cash: "الدفع نقدي",
        bank_account: "حساب بنكي",
        online: "اونلين",
        monthly: "شهرى",
        yearly: "سنوي",
        "Medical center": "المركز الطبي",
        Doctor: "الطبيب",
        Client: "العميل",
        Admin: "الموظف",
        "Create new car": "أضف سيارة جديد",
        Approved: "مقبول",
        Pending: "قيد الانتظار",
        "Created at": "تاريخ الانشاء",
        "Product price": "سعر المنتج",
        "Car data": "بيانات السيارة",
        "From Time": "بداية الباقة",
        "To Time": " نهاية الباقة",

        Used: "مستعمل",
        New: "جديد",
        OrderPlaced: "تم تسجيل الطلب",
        PaymentConfirmed: "تم تأكيد عملية الدفع",
        Processing: "جار التجهيز",
        Shipped: "تم الشحن",
        Delivered: "تم التوصيل",
        Rejected: "تم الرفض",
        Yes: "نعم",
        No: "لا",
        "Add new city": "أضف مدينة جديدة",

        "Edit city": "تعديل المدينة",
        "Deleting...": "جار الحذف...",
        "Deleted successfully": "تم الحذف بنجاح",
        "You cannot download more than ": "لا يمكنك تحميل اكثر من ",
        " from files.": " من الملفات",
        "Add new admin": "أضف مشرف جديد",
        "Add new customer": "أضف عميل جديد",
        "Edit Customer": "تعديل العميل",
        "Add new brand": "اضافة ماركة جديدة",
        "Edit brand": "تعديل الماركة",
        "Add new subcategory": "اضافة قسم فرعي جديد",
        "Add category": "اضافة فئة جديدة",

        "Edit subcategory": "تعديل القسم الفرعي",
        "Add new tag": "أضف كلمة مفتاحية جديدة",
        "Edit Tag": "تعديل الكلمة المفتاحية",
        "Add new skin color": "أضف لون جديد",
        "Add new ad": "أضف اعلان جديد",
        "Show 1 to": "عرض 1 إلى",
        "from total": "من اجمالي",
        "Are you sure you want to block this": "هل أنت متأكد من حظر هذا",
        user: "المستخدم",
        "will be blocked": "سوف يتم حظرها",
        "Yes, Block !": "نعــم, حظر !",
        Ok: "حسناُ",
        "Are you sure": "هل أنت متأكد",
        "In Stock": "في المخزن",
        "Out Stock": "خارج المخزن",
        "Fast Shipping": "متوفر شحن سريع",
        Blocked: "حظر",
        Unblocked: "رفع الحظر",
        "Blocked...": "جار الحظر...",
        "Unblocked...": "جار رفع الحظر...",
        "Blocked successfully": "تم إلغاء الحظر بنجاح",
        "Un Blocked successfully": "تم الحظر بنجاح",
        Blocking: "حظر",
        Unblocking: "رفع الحظر",
        "You must add shipping details first":
            "يجب عليك إضافة بيانات الشحن أولاً",
        "Edit shipping data": "تعديل بيانات الشحن",
        "Edit branch": "تعديل الفرع",
        "Data recovery": "إسترجاع البيانات",
        "Add new fast shipping city": "إضافة مدينة جديدة للشحن السريع",
        "Add new branch": "إضافة فرع جديد",
        Visible: "مرئي",
        Invisible: "مخفي",
        Enabled: "مفعل",
        "Last 7 Days": "آخر 7 أيام",
        "Last 30 Days": "آخر 30 يوما",
        "This Month": "هذا الشهر",
        "Last Month": "الشهر الماضي",
        "This Year": "هذا العام",
        "Last Year": "العام الماضي",
        "Order Count": "عدد الطلبات",
        Total: "المجموع",
        SAR: "ر.س",
        "Normal Shipping": "الشحن العادي",
        Today: "اليوم",
        "Automatically update price": "تحديث السعر تلقائيًا",
        Weight: "الوزن",
        Descript: "الوصف",
        DESCRIPTION: "الوصف",
        Canceled: "تم الإلغاء",
        Refund: "تم الإسترجاع",
        "Add new reason": "أضف سبب جديد",
        "Edit reason": "تعديل السبب",
        "": "",
        "": "",
        "": "",
        "": "",
        "": "",
        "": "",
        "": "",
        "": "",
        "": "",
    },
};
