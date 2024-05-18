@extends('welcome')

<!-- ========== Start Section ========== -->
@section('master')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>{!! $terms->text !!}</p>

                {{-- <ol type="1" class="ms-3">
                    <li>
                        <h6>Introduction</h6>
                        <p class="text-secondary font14">
                            This website is operated by Fab Texture. These Terms and Conditions govern your access to
                            and use of our website, including any content, functionality, and services offered on or
                            through our website.
                        </p>
                    </li>
                    <li>
                        <h6>Acceptance of Terms</h6>
                        <p class="text-secondary font14">
                            By accessing or using our website, you accept these Terms and Conditions, and you agree to
                            comply with them. If you do not agree to these Terms and Conditions, you should not use our
                            website.
                        </p>
                    </li>
                    <li>
                        <h6>Use of the Website</h6>
                        <p class="text-secondary font14">
                            Our website is intended for personal and non-commercial use only. You may not use our
                            website for any illegal or unauthorized purpose. You agree not to reproduce, duplicate, copy,
                            sell, resell or exploit any portion of the website without our express written permission.
                        </p>
                    </li>
                    <li>
                        <h6>Intellectual Property</h6>
                        <p class="text-secondary font14">
                            All content on our website, including text, graphics, logos, images, and software, is the
                            property of Fab Texture or its suppliers and is protected by Indian and international copyright
                            laws. You may not reproduce, distribute, modify, create derivative works of, publicly display,
                            publicly perform, republish, download, store, or transmit any content on our website without
                            our express written consent.
                        </p>
                    </li>
                    <li>
                        <h6>Pricing and Payment</h6>
                        <p class="text-secondary font14">
                            All prices displayed on our website are in rupees and are subject to change without notice.
                            We reserve the right to correct any errors in pricing or product information. Payment must be
                            made at the time of purchase, and we accept all major credit cards.
                        </p>
                    </li>
                    <li>
                        <h6>Shipping and Delivery</h6>
                        <p class="text-secondary font14">
                            We offer shipping globally. Shipping times may vary depending on the product and
                            destination. We will provide an estimated delivery date when you place your order, but we
                            are not responsible for any delays in delivery due to unforeseen circumstances.
                        </p>
                    </li>
                    <li>
                        <h6>Returns and Refunds</h6>
                        <p class="text-secondary font14">
                            We offer a 30-day return policy on all products purchased through our website. To be eligible
                            for a return, the product must be unused and in the same condition that you received it. You
                            will be responsible for the cost of return shipping, and we will refund the purchase price once
                            we receive the returned product.
                        </p>
                    </li>
                    <li>
                        <h6>Limitation of Liability</h6>
                        <p class="text-secondary font14">
                            We will not be liable for any damages of any kind arising from the use of our website or the
                            purchase of any products through our website, including but not limited to direct, indirect,
                            incidental, punitive, and consequential damages.
                        </p>
                    </li>
                    <li>
                        <h6>Indemnification</h6>
                        <p class="text-secondary font14">
                            You agree to indemnify, defend, and hold harmless, its officers, directors, employees, agents,
                            licensors, and suppliers from and against all losses, expenses, damages, and costs, including
                            reasonable attorneys' fees, resulting from any violation of these Terms and Conditions or any
                            activity related to your use of our website.
                        </p>
                    </li>
                    <li>
                        <h6>Governing Law</h6>
                        <p class="text-secondary font14">
                            These Terms and Conditions shall be governed by and construed in accordance with the laws
                            of the State of [State], without giving effect to any principles of conflicts of law.
                        </p>
                    </li>
                    <li>
                        <h6>Changes to Terms and Conditions</h6>
                        <p class="text-secondary font14">
                            We reserve the right to modify these Terms and Conditions at any time without prior notice.
                            Your continued use of our website after any such changes will constitute your acceptance of
                            the new Terms and Conditions.
                        </p>
                    </li>
                </ol> --}}
            </div>
        </div>
    </div>
@endsection
<!-- ========== End Section ========== -->
