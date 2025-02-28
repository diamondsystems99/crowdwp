<?php
/* Template Name: تماس با ما */
get_header(); global $_URL, $_DIR;
?>

    <section class="flat-section flat-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-content">
                        <h4>ما را یک خط رها کنید</h4>
                        <p class="body-2 text-variant-1">
                            برای به روزرسانی ، اخبار و موارد دیگر با ما از طریق کانال
                            های آنلاین ما ارتباط برقرار کنید.
                        </p>
                        <br>
                        <form
                            action="#"
                            class="form-contact"
                            id="contactform"
                            method="post"
                        >
                            <div class="box grid-2">
                                <fieldset>
                                    <label for="name">نام کامل:</label>
                                    <input
                                        class="form-control"
                                        id="name"
                                        name="name"
                                        placeholder="نام شما"
                                        required=""
                                        type="text"
                                    />
                                </fieldset>
                                <fieldset>
                                    <label for="email">آدرس ایمیل:</label>
                                    <input
                                        class="form-control"
                                        id="email"
                                        name="email"
                                        placeholder="ایمیل"
                                        required=""
                                        type="text"
                                    />
                                </fieldset>
                            </div>
                            <div class="box grid-2">
                                <fieldset>
                                    <label for="phone">شماره تلفن:</label>
                                    <input
                                        class="form-control style-1"
                                        id="phone"
                                        name="phone"
                                        placeholder="سابق 012345678"
                                        required=""
                                        type="text"
                                    />
                                </fieldset>
                                <fieldset>
                                    <label for="subject">موضوع:</label>
                                    <input
                                        class="form-control style-1"
                                        id="subject"
                                        name="subject"
                                        placeholder="کلمه کلیدی را وارد کنید"
                                        type="text"
                                    />
                                </fieldset>
                            </div>
                            <fieldset>
                                <label for="message">پیام شما:</label>
                                <textarea
                                    class="form-control"
                                    cols="30"
                                    id="message"
                                    name="message"
                                    placeholder="متن پیام"
                                    required=""
                                    rows="10"
                                ></textarea>
                            </fieldset>
                            <div class="send-wrap">
                                <button class="tf-btn primary size-1" type="submit">
                                    ارسال پیام
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h4>با ما تماس بگیرید</h4>
                        <ul>
                            <li class="box">
                                <h6 class="title">آدرس:</h6>
                                <p class="text-variant-1">
                                    تهران میرداماد قبل از خیابان نیل جنب ستاد مرکزی بیمه دی ساختمان سبز(۲۳۷) طبقه ۴ واحد بیست
                                </p>
                            </li>
                            <li class="box">
                                <h6 class="title">شماره تماس:</h6>
                                <p class="text-variant-1">
                                    021-22255095
                                </p>
                            </li>
                            <li class="box">
                                <h6 class="title">کد پستی:</h6>
                                <p class="text-variant-1">
                                    1918955177
                                </p>
                            </li>
                            <li class="box">
                                <div class="title">Email:</div>
                                <p class="text-variant-1">
                                    crowdyab.ir@gmail.com
                                </p>
                            </li>
                            <li class="box">
                                <div class="title">ما را دنبال کنید:</div>
                                <ul class="box-social">
                                    <li>
                                        <a class="item" href="https://instagram.com/crowdyab">
                                            <svg
                                                fill="none"
                                                height="18"
                                                viewbox="0 0 18 18"
                                                width="18"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M9.00245 4.38427C6.4484 4.38427 4.38828 6.44438 4.38828 8.99844C4.38828 11.5525 6.4484 13.6126 9.00245 13.6126C11.5565 13.6126 13.6166 11.5525 13.6166 8.99844C13.6166 6.44438 11.5565 4.38427 9.00245 4.38427ZM9.00245 11.9983C7.35195 11.9983 6.00264 10.653 6.00264 8.99844C6.00264 7.34392 7.34794 5.99862 9.00245 5.99862C10.657 5.99862 12.0023 7.34392 12.0023 8.99844C12.0023 10.653 10.653 11.9983 9.00245 11.9983ZM14.8816 4.19552C14.8816 4.79388 14.3997 5.27176 13.8054 5.27176C13.207 5.27176 12.7291 4.78986 12.7291 4.19552C12.7291 3.60118 13.211 3.11928 13.8054 3.11928C14.3997 3.11928 14.8816 3.60118 14.8816 4.19552ZM17.9376 5.28782C17.8694 3.84615 17.5401 2.56912 16.4839 1.51697C15.4318 0.46483 14.1547 0.135534 12.7131 0.0632491C11.2272 -0.021083 6.77368 -0.021083 5.28782 0.0632491C3.85016 0.131518 2.57313 0.460815 1.51697 1.51296C0.460815 2.5651 0.135534 3.84213 0.0632491 5.28381C-0.021083 6.76966 -0.021083 11.2232 0.0632491 12.7091C0.131518 14.1507 0.460815 15.4278 1.51697 16.4799C2.57313 17.532 3.84615 17.8613 5.28782 17.9336C6.77368 18.018 11.2272 18.018 12.7131 17.9336C14.1547 17.8654 15.4318 17.5361 16.4839 16.4799C17.5361 15.4278 17.8654 14.1507 17.9376 12.7091C18.022 11.2232 18.022 6.77368 17.9376 5.28782ZM16.0181 14.3033C15.7048 15.0904 15.0985 15.6968 14.3073 16.0141C13.1227 16.4839 10.3116 16.3755 9.00245 16.3755C7.6933 16.3755 4.87821 16.4799 3.69756 16.0141C2.91046 15.7008 2.30407 15.0944 1.98682 14.3033C1.51697 13.1187 1.6254 10.3076 1.6254 8.99844C1.6254 7.68928 1.52099 4.8742 1.98682 3.69355C2.30006 2.90645 2.90645 2.30006 3.69756 1.98281C4.88223 1.51296 7.6933 1.62139 9.00245 1.62139C10.3116 1.62139 13.1267 1.51697 14.3073 1.98281C15.0944 2.29604 15.7008 2.90243 16.0181 3.69355C16.4879 4.87821 16.3795 7.68928 16.3795 8.99844C16.3795 10.3076 16.4879 13.1227 16.0181 14.3033Z"
                                                    fill="#161E2D"
                                                ></path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>