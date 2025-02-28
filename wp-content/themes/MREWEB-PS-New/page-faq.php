<?php
/* Template Name: سوالات متداول */
get_header(); global $_URL, $_DIR;

$index = 1;
?>

    <section class="flat-section">
        <div class="container">
            <div class="tf-faq">
                <h3 class="fw-8 text-center title">ویژه سرمایه‌گذار</h3>
                <ul class="box-faq" id="wrapper-faq">
                    <li class="faq-item active">
                        <a aria-controls="accordion-faq-0" aria-expanded="false" class="faq-header collapsed"
                           data-bs-toggle="collapse" href="#accordion-faq-0">
                            چگونه می‌توانم در پروژه‌های تأمین مالی جمعی سرمایه‌گذاری کنم؟
                        </a>
                        <div class="collapse show" data-bs-parent="#wrapper-faq" id="accordion-faq-0">
                            <p class="faq-body">
                                برای سرمایه‌گذاری در طرح‌های نمایش داده شده درکرادیاب، کافی است: به بخش پنل کاربری خود وارد شوید و طرح‌های موجود را از نظر  نام سکو، شرکت سرمایه پذیر، میزان ریسک بر اساس تضامین و همچنین مدت و درصد برآورد سود بررسی و مقایسه کنید. طرح موردنظر خود را انتخاب کرده و اطلاعات آن را مطالعه نمایید. با رعایت مراحل ثبت‌نام و تأیید هویت، مبلغ مورد نظر خود را سرمایه‌گذاری کنید.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header" data-bs-toggle="collapse"
                           href="#accordion-faq-<?php echo $index; ?>">
                            ریسک‌های سرمایه‌گذاری در تأمین مالی جمعی چیست؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq" id="accordion-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                هر سرمایه‌گذاری با ریسک همراه است. در تأمین مالی جمعی، ریسک‌هایی مانند عدم موفقیت پروژه، تأخیر در بازگشت سرمایه و مشکلات حقوقی ممکن است وجود داشته باشد. توصیه می‌شود قبل از سرمایه‌گذاری، اطلاعات پروژه را به دقت بررسی کنید.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header" data-bs-toggle="collapse"
                           href="#accordion-faq-<?php echo $index; ?>">
                            آیا می‌توانم هم‌زمان چند پروژه برای تأمین مالی جمعی ثبت کنم؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq" id="accordion-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                بله. هر کاربر می تواند همزمان در طرح های مختلف تامین مالی جمعی سرمایه گذاری کند. این ویژگی در بخش سبد پیشنهادی تامین مالی جمعی فراهم شده است.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header" data-bs-toggle="collapse"
                           href="#accordion-faq-<?php echo $index; ?>">
                            چگونه می‌توانم بازگشت سرمایه خود را پیگیری کنم؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq" id="accordion-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                از طریق داشبورد حساب کاربری خود در کرادیاب می‌توانید گزارش‌های مالی، میزان سرمایه‌گذاری و وضعیت بازگشت سرمایه را مشاهده کنید.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header" data-bs-toggle="collapse"
                           href="#accordion-faq-<?php echo $index; ?>">
                            آیا کرادیاب تضمینی برای بازگشت سرمایه ارائه می‌دهد؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq" id="accordion-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                خیر، کرادیاب فقط یک بستر ارتباطی میان سرمایه‌گذاران و سرمایه‌پذیران است و هیچ تضمینی برای بازگشت سرمایه ارائه نمی‌دهد. توصیه می‌شود قبل از سرمایه‌گذاری، اطلاعات پروژه و سوابق شرکت و سکو را بررسی نمایید.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header" data-bs-toggle="collapse"
                           href="#accordion-faq-<?php echo $index; ?>">
                            آیا تضامین طرح ها با هم متفاوت است؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq" id="accordion-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                بله، اگر طرحی دارای ضمانت نامه از بانک یا صندوق های پژوهشی داشته باشد یعنی هیچگونه ریسکی در وصول مبلغ تضمین شده وجود ندارد.
                                تفاوت طرح ها در این مورد در ارائه ضمانت نامه برای اصل مبلغ و یا اصل و سود علی الحساب طرح می باشد.
                                در برخی از طرح ها برای تضمین، ملک، سهام، چک یا سفته ارائه می شود که در این موارد ریسک وصول مبالغ درصورت شکست طرح بالاتر است
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header" data-bs-toggle="collapse"
                           href="#accordion-faq-<?php echo $index; ?>">
                            آیا می‌توانم سرمایه خود را قبل از اتمام طرح پس بگیرم؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq" id="accordion-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                خیر، پس از سرمایه‌گذاری و تأیید پرداخت، مبلغ شما در پروژه قفل می‌شود و تنها در صورت عدم موفقیت پروژه، اصل سرمایه شما بازگردانده خواهد شد.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header" data-bs-toggle="collapse"
                           href="#accordion-faq-<?php echo $index; ?>">
                            آیا سود سرمایه‌گذاری تضمین‌شده است؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq" id="accordion-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                خیر، سرمایه‌گذاری در تأمین مالی جمعی همراه با ریسک است و میزان سوددهی به عملکرد پروژه بستگی دارد.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header" data-bs-toggle="collapse"
                           href="#accordion-faq-<?php echo $index; ?>">
                            آیا کرادیاب هزینه‌ای بابت سرمایه‌گذاری دریافت می‌کند؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq" id="accordion-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                کرادیاب هیچ درصدی از سود یا کارمزد تراکنش‌ها را به‌عنوان هزینه خدمات از کاربران سرمایه گذار دریافت نمیکند. این اطلاعات در بخش شرایط و قوانین ذکر شده است.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header" data-bs-toggle="collapse"
                           href="#accordion-faq-<?php echo $index; ?>">
                            سبد پیشنهادی تأمین مالی جمعی چیست؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq" id="accordion-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                سبد پیشنهادی کرادیاب مجموعه‌ای از پروژه‌های تأمین مالی جمعی است که بر اساس تحلیل‌های تخصصی انتخاب شده‌اند. این سبدها به کاربران کمک می‌کنند تا سرمایه خود را در چندین پروژه مختلف با وزن‌های پیشنهادی سرمایه‌گذاری کنند و ریسک خود را مدیریت نمایند.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header" data-bs-toggle="collapse"
                           href="#accordion-faq-<?php echo $index; ?>">
                            چگونه می‌توانم در یک سبد پیشنهادی سرمایه‌گذاری کنم؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq" id="accordion-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                پس از ورود به حساب کاربری خود، می‌توانید به بخش «سبدهای پیشنهادی» مراجعه کنید، سبد موردنظر خود را انتخاب کنید و مقدار سرمایه موردنظر خود را تخصیص دهید. سیستم به‌صورت خودکار سرمایه شما را میان پروژه‌های موجود در سبد توزیع می‌کند.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header" data-bs-toggle="collapse"
                           href="#accordion-faq-<?php echo $index; ?>">
                            وزن‌های پیشنهادی در سبدهای کرادیاب چگونه تعیین می‌شوند؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq" id="accordion-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                وزن‌های هر پروژه در سبد پیشنهادی بر اساس معیارهایی مانند ریسک پروژه، میزان بازدهی موردانتظار، تنوع‌بخشی و تحلیل‌های کارشناسانه تعیین می‌شوند.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header" data-bs-toggle="collapse"
                           href="#accordion-faq-<?php echo $index; ?>">
                            آیا می‌توانم ترکیب سبد پیشنهادی را تغییر دهم؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq" id="accordion-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                خیر، ترکیب پروژه‌های هر سبد از پیش تعیین شده است. اما شما می‌توانید سبدهای مختلف را بررسی کرده و گزینه‌ای که به استراتژی سرمایه‌گذاری شما نزدیک‌تر است را انتخاب کنید.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header" data-bs-toggle="collapse"
                           href="#accordion-faq-<?php echo $index; ?>">
                            حداقل و حداکثر میزان سرمایه‌گذاری در سبد پیشنهادی چقدر است؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq" id="accordion-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                حداقل و حداکثر مبلغ سرمایه‌گذاری بستگی به هر سبد دارد و در جزئیات هر سبد مشخص شده است.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header" data-bs-toggle="collapse"
                           href="#accordion-faq-<?php echo $index; ?>">
                            آیا سبد پیشنهادی باعث کاهش ریسک سرمایه‌گذاری می‌شود؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq" id="accordion-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                بله، یکی از مزایای این قابلیت، تنوع‌بخشی به سرمایه‌گذاری‌ها است که می‌تواند ریسک کلی را کاهش دهد. با این حال، همچنان سرمایه‌گذاری در تأمین مالی جمعی با ریسک‌هایی همراه است.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header" data-bs-toggle="collapse"
                           href="#accordion-faq-<?php echo $index; ?>">
                            آیا امکان خروج از سبد پیشنهادی قبل از پایان دوره سرمایه‌گذاری وجود دارد؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq" id="accordion-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                خیر، پس از سرمایه‌گذاری در یک سبد، امکان تغییر یا خروج قبل از پایان دوره تعیین‌شده وجود ندارد.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header" data-bs-toggle="collapse"
                           href="#accordion-faq-<?php echo $index; ?>">
                            کرادیاب چه نقشی در مدیریت سبدهای پیشنهادی دارد؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq" id="accordion-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                کرادیاب به‌عنوان یک بستر تأمین مالی جمعی، پروژه‌های موجود در سبدها را بر اساس شاخص‌های مشخص انتخاب و معرفی می‌کند، اما مسئولیتی در قبال عملکرد مالی آن‌ها ندارد.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header" data-bs-toggle="collapse"
                           href="#accordion-faq-<?php echo $index; ?>">
                            چگونه می‌توانم عملکرد سبد پیشنهادی خود را پیگیری کنم؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq" id="accordion-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                از طریق داشبورد حساب کاربری، می‌توانید گزارش‌های عملکرد سبد و وضعیت سرمایه‌گذاری خود را مشاهده کنید.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header" data-bs-toggle="collapse"
                           href="#accordion-faq-<?php echo $index; ?>">
                            آیا می‌توانم در بیش از یک سبد پیشنهادی سرمایه‌گذاری کنم؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq" id="accordion-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                بله، شما می‌توانید هم‌زمان در چندین سبد پیشنهادی سرمایه‌گذاری کنید و ترکیب متنوعی از پروژه‌ها را در سبد سرمایه‌گذاری خود داشته باشید
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

            <div class="tf-faq">
                <h3 class="fw-8 text-center title">ویژه سرمایه‌پذیر</h3>
                <ul class="box-faq" id="wrapper-faq-two">
                    <li class="faq-item">
                        <a aria-controls="accordion2-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header collapsed"
                           data-bs-toggle="collapse" href="#accordion2-faq-<?php echo $index; ?>">
                            شرکت ها چگونه می توانند برای طرح های خود از طریق کرادیاب سرمایه جذب نمایند؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq-<?php echo $index; ?>" id="accordion2-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                شرکت ها پس از ورود به بخش سرمایه پذیر و مطالعه شرایط سرمایه پذیری و بارگذاری اطلاعات شرکت، و پس از بررسی اولیه، می توانند با مشاوره کارشنان کرادیاب بهترین سکوها را جهت تامین مالی جمعی انتخاب کنند.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion2-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header collapsed"
                           data-bs-toggle="collapse" href="#accordion2-faq-<?php echo $index; ?>">
                            چه شرایطی برای ثبت پروژه در کرادیاب وجود دارد؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq-<?php echo $index; ?>" id="accordion2-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                پروژه باید دارای مدل کسب‌وکار مشخص، برنامه اجرایی شفاف و امکان جذب سرمایه باشد. همچنین، مدارک موردنیاز برای احراز هویت و تأیید هویت تیم اجرایی لازم است.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion2-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header collapsed"
                           data-bs-toggle="collapse" href="#accordion2-faq-<?php echo $index; ?>">
                            سرمایه‌گذاران چگونه به پروژه من اعتماد می‌کنند؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq-<?php echo $index; ?>" id="accordion2-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                ارائه اطلاعات شفاف، برنامه مالی مشخص، پاسخگویی به سوالات سرمایه‌گذاران و ارائه ضمانت‌های ممکن به افزایش اعتماد آن‌ها کمک می‌کند.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion2-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header collapsed"
                           data-bs-toggle="collapse" href="#accordion2-faq-<?php echo $index; ?>">
                            چه مدت طول می‌کشد تا سرمایه جذب شده در اختیار شرکت قرارگیرد؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq-<?php echo $index; ?>" id="accordion2-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                بسته به شرایط توافق‌شده، مبلغ تامین مالی پس از پایان کمپین و بررسی نهایی، به حساب شرکت سرمایه پذیر واریز می‌شود.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion2-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header collapsed"
                           data-bs-toggle="collapse" href="#accordion2-faq-<?php echo $index; ?>">
                            حداقل و حداکثر میزان سرمایه‌ای که می‌توانم درخواست کنم چقدر است؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq-<?php echo $index; ?>" id="accordion2-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                در تأمین مالی جمعی در ایران، مطابق با دستورالعمل‌های سازمان بورس و اوراق بهادار، محدودیت‌هایی برای میزان سرمایه‌گذاری وجود دارد:
                                <br>
                                حداکثر مبلغ قابل تأمین برای هر طرح: 500 میلیارد ریال (50 میلیارد تومان). و هر شرکت می تواند حداقل دو طرح را به مجموع 100 میلیارد تومان تامین سرمایه نماید.
                                <br>
                                حداقل مشارکت سرمایه‌پذیر: سرمایه‌پذیر موظف است حداقل ۱۰٪ از سرمایه مورد نیاز طرح را خود تأمین کند.
                                <br>
                                حداکثر مشارکت هر سرمایه‌گذار حقیقی: هر شخص حقیقی می‌تواند حداکثر تا ۵٪ از کل مبلغ هر طرح را سرمایه‌گذاری کند.
                                <br>
                                حداقل میزان سرمایه‌گذاری: حداقل میزان سرمایه‌گذاری برای هر کد حقوقی ۵۰۰ میلیون ریال است.
                                این محدودیت‌ها برای هر طرح اعمال می‌شوند و ممکن است بسته به سیاست‌های هر سکو (پلتفرم) تفاوت‌هایی وجود داشته باشد. برای اطلاعات دقیق‌تر، به دستورالعمل‌های سازمان بورس و اوراق بهادار و مقررات سکوی مورد نظر خود مراجعه کنید.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion2-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header collapsed"
                           data-bs-toggle="collapse" href="#accordion2-faq-<?php echo $index; ?>">
                            چه کسب و کارهایی میتوانند در سکوها تامین مالی کنند؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq-<?php echo $index; ?>" id="accordion2-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                شرکت‌های کوچک و متوسط و بزرگ تکنولوژی محور میتوانند برای توسعه کسب‌وکار خود از طریق سکوها تامین مالی کنند. همچنین متقاضی باید شرایط زیر را داشته باشد:
                                <br>
                                شخص حقوقی ایرانی بوده و جزو دستگاه‌های اجرایی، مؤسسات و نهادهای عمومی دولتی و غیردولتی (موضوع مواد 3 و 5 قانون خدمات کشوری) و همچنین نهاد مالی یا پولی نباشد؛
                                <br>
                                طرح در داخل کشور اجرا شده و هدف، هزینه و زمان‌بندی اجرای آن به صورت دقیق مشخص باشد. همچنین طرح توجیهی حساب شده و قابل دفاعی داشته باشد؛
                                <br>
                                سرمایه مورد نیاز اجرای برای هر طرح کمتر از 50 میلیارد تومان(تامین مالی 50 میلیارد برای هرطرح دارای شرایط ویژه ای می باشد)
                                <br>
                                طبق دستورالعمل تامین مالی جمعی لازم است ۱۰٪ این مبلغ توسط خود سرمایه پذیر تامین شود.

                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion2-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header collapsed"
                           data-bs-toggle="collapse" href="#accordion2-faq-<?php echo $index; ?>">
                            در صورت عدم موفقیت در جذب سرمایه، چه اتفاقی برای پروژه می‌افتد؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq-<?php echo $index; ?>" id="accordion2-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                اگر کمپین به هدف مالی خود نرسد، سرمایه‌های جذب‌شده به سرمایه‌گذاران بازگردانده خواهد شد و پروژه به پایان می‌رسد.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion2-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header collapsed"
                           data-bs-toggle="collapse" href="#accordion2-faq-<?php echo $index; ?>">
                            کرادیاب چه حمایتی از سرمایه‌پذیران انجام می‌دهد؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq-<?php echo $index; ?>" id="accordion2-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                کرادیاب علاوه بر ارائه بستر ارتباطی جذب سرمایه، در زمینه مشاوره مالی و تامین مالی، اصلاح ساختار، بازاریابی و بهبود ارائه پروژه به شما کمک می‌کند.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion2-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header collapsed"
                           data-bs-toggle="collapse" href="#accordion2-faq-<?php echo $index; ?>">
                            آیا می‌توانم سرمایه جذب‌شده را برای اهدافی غیر از پروژه ثبت‌شده استفاده کنم؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq-<?php echo $index; ?>" id="accordion2-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                خیر، سرمایه جذب‌شده تنها باید مطابق با برنامه ارائه‌شده در کمپین استفاده شود و هرگونه تغییر در نحوه مصرف آن نیازمند شفاف‌سازی و اطلاع‌رسانی به سرمایه‌گذاران است.
                            </p>
                        </div>
                    </li>
                    <li class="faq-item">
                        <a aria-controls="accordion2-faq-<?php echo ++$index; ?>" aria-expanded="false" class="faq-header collapsed"
                           data-bs-toggle="collapse" href="#accordion2-faq-<?php echo $index; ?>">
                            در صورت تأخیر در اجرای پروژه، چه اتفاقی می‌افتد؟
                        </a>
                        <div class="collapse" data-bs-parent="#wrapper-faq-<?php echo $index; ?>" id="accordion2-faq-<?php echo $index; ?>">
                            <p class="faq-body">
                                سرمایه‌پذیران موظف هستند سرمایه‌گذاران را از هرگونه تأخیر یا تغییر در برنامه مطلع کنند. عدم شفافیت ممکن است منجر به کاهش اعتماد سرمایه‌گذاران شود.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

<?php get_footer(); ?>