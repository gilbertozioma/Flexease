<x-app-layout>

     <!-- hero sectio -->
         <section id="hero">
              <div class="flex px-12 py-4 gap-8 justify-center items-center max-w-screen">
                <div class="flex flex-col items-start gap-5">
                    <div class="flex flex-col gap-4 items-start">
                        <p class="text-black text-[18px] font-[400] bg-Accent_4 rounded-full px-2">simply secure succeed</p>
                        <p class="text-#0D120E  text-[3rem] font-[700] capitalize">STREAMLINED Payment Solution <span class="text-[#1da756]">payment</span> solution</p>
                        <small class="text-[18px] w-[27rem] font-400">Experience the simplicity of our all-in-one payment platform that unlocks new growth opportunities for your small business</small>
                    </div>
                    <div class="flex gap-8 items-center">
                        <div class="capitalize text-white text-[18px] font-[700] inline-flex px-[15px] py-[8px] rounded-[20px] bg-green">Get Started</div>
                        <div class="capitalize text-white text-[18px] font-[700] inline-flex px-[15px] py-[8px] rounded-[20px] bg-black">Request demo</div>
                    </div>
                </div>
                <div class="relative ">
                    <img class="object-contain" src="./assets/land.png" alt="Description of image">
                    <div class="absolute z-1 bottom-[-10rem] left-[-20rem]">
                        <div class="rounded-[1.2rem] px-6 py-3 flex flex-col bg-white gap-5">
                            <h1 class="">Pay With</h1>
                            <div class="flex  gap-4">
                               <img class="object-contain" src="./assets/logos_mastercard.png" alt="">
                               <img class="object-contain" src="./assets/logos_visa.png" alt="">
                            </div>
                            <form class="flex flex-col gap-4">
                                <div class="flex flex-col item-start gap-4">
                                    <p class="font-600 text-[rgba-13-18-14-40] text-[16px]">Card Number</p>
                                    <input class="rounded-full outline-none  imput" type="number"/>
                                </div>
                                <div class="flex items-center gap-7">
                                    <div class="flex flex-col item-start gap-4">
                                        <p class="font-[600] text-rgba[-13-18-14-40] text-[16px]">Exp Date</p>
                                        <input class="rounded-full outline-none  imput" type="number"/>
                                    </div>
                                    <div class="flex flex-col item-start gap-4">
                                        <p class="font-[600] text-[rgba-13-18-14-40] text-[16px]">CVV2</p>
                                        <input class="rounded-full outline-none  imput" type="number"/>
                                    </div>
                                </div>
                                <div class="flex justify-center items-center bg-[#1DA756] rounded-[1rem] py-2">Pay</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
         </section>

         <!-- features  -->
         <section id="features"> 
            <div class="flex mt-[12rem] justify-center text-center ">
                <div class="justify-between px-12 rounded-3xl bg-[#1DA756] w-[80rem] h-[238px] flex items-center">
                  <div>
                    <div class="flex flex-col items-center text-center">
                      <div class='text-white text-[28px] font-[500]' id="countUp1">0<span>K+</span></div>
                      <small class='mt-4 text-white text-[20px] font-[400]'>Business Owners Globally</small>
                    </div>
                  </div>
                  <div>
                    <div class="flex flex-col items-center text-center">
                      <div class='text-white text-[28px] font-[500]' id="countUp2">0<span>%</span></div>
                      <small class='mt-4 text-white text-[20px] font-[400]'>Customer Satisfaction</small>
                    </div>
                  </div>
                  <div>
                    <div class="flex flex-col items-center text-center">
                      <div class='text-white text-[28px] font-[500]' id="countUp3">0<span>K</span></div>
                      <small class='mt-4 text-white text-[20px] font-[400]'>Money Managed</small>
                    </div>
                  </div>
                </div>
              </div>

         </section>
          <!--  ALL  -->
          <section id="testimonials"> 
              <div class="flex  justify-between mt-8 pr-[2rem] items-center w-full">
                <img style="width: 400px;"  src="./assets/cards-removebg-preview.png" alt="">
                <div class="flex items-end w-[30rem]">
                  <div class="flex flex-col items-start gap-4">
                    <div class="flex flex-col">
                      <h1 class="text-black text-[32px] font-[700]">The <span class="text-[#1DA756]">  All-In-One Payment </span> App You Will Ever Need</h1>
                      <p class="text-[18px] font-[400] text-black">FlexEase is the catalyst for streamline invoicing, payment collection, and financial tracking while ensuring security, seamless integration, and actionable insights.</p>
                    </div>
                    <div class='flex flex-col gap-12 items-start'>
                      <div class="flex gap-4 items-center">
                        <div style="box-shadow:0px 4px 4px 0px #1DA756; border-radius:20px;" class="bg-white shadow-[] flex justify-center p-6 items-center">
                          <img src="./assets/Svg/game-icons_shaking-hands.svg" alt="User-Friendly Icon"/> <!-- Replace 'hand.svg' with your actual image path -->
                        </div>
                        <div class="flex flex-col items-start">
                          <h1 class="text-[20px] font-[700]">User-Friendly</h1>
                          <p class='text-[18px] font-[400] my-2'>With a simple and intuitive interface, your transactions, sales and reports are now accessible anytime.</p>
                        </div>
                      </div>
                      <div class="flex gap-4 items-center">
                        <div style="box-shadow:0px 4px 4px 0px #1DA756; border-radius:20px;" class="bg-white shadow-[] flex justify-center p-6 items-center">
                          <img src="./assets/Svg/mdi_server-security.png" alt="Best Security Icon"/> <!-- Replace 'secure.png' with your actual image path -->
                        </div>
                        <div class="flex flex-col items-start">
                          <h1 class="text-[20px] font-[700]">Best Security</h1>
                          <p class='text-[18px] font-[400] my-2'>Safe transactions are now ensured as sensitive data are protected with our robust security measures.</p>
                        </div>
                      </div>
                      <div class="flex gap-4 items-center">
                        <div style="box-shadow:0px 4px 4px 0px #1DA756; border-radius:20px;" class="bg-white shadow-[] flex justify-center p-6 items-center">
                          <img src="./assets/Svg/fluent_box-multiple-checkmark-24-regular.png" alt="Versatility Icon"/> <!-- Replace 'Package.png' with your actual image path -->
                        </div>
                        <div class="flex flex-col items-start">
                          <h1 class="text-[20px] font-[700]">Versatility</h1>
                          <p class='text-[18px] font-[400] my-2'>We offer multiple payment options so as to accommodate various business models and customer preferences</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
          </section>
          <!-- Feature  -->
          <section id="cta"  > 
            <div class="w-full flex justify-center items-center">
              <div class="flex flex-col justify-between gap-8 p-10 items-start">
                <div class="">
                  <h1 class="text-[32px] font-[700] text-[#0D120E]">Our <span class="text-[#1DA756]">Amazing</span> Features</h1>
                </div>
                <div style="display: grid; grid-template-columns: repeat(2, 1fr);" class="gap-8 items-center justify-center">
                  <div style="background-color: rgba(29, 167, 86, 0.20);" class="relative rounded-md p-7">
                    <div class="absolute right-[1rem] top-[1rem] bg-[rgba(29, 167, 86, 0.20)]">
                      <img src="./assets/Svg/Vector.svg" alt="Image 1"/> <!-- Replace 'img_1' with your actual image path -->
                    </div>
                    <div class="flex flex-col items-start gap-8">
                      <h1 class="text-black text-[28px] font-[700]">Real-Time Payment Alerts</h1>
                      <p class="text-black font-[400] text-[20px]">Business owners can receive instant notifications for payments received or outstanding invoices. This real-time feature keeps business owners informed about the financial status of their transactions.</p>
                    </div>
                  </div>
                  <div style="background-color: rgba(60, 65, 63, 0.40);" class="relative rounded-md p-7">
                    <div class="absolute right-[1rem] top-[1rem] bg-[rgba(29, 167, 86, 0.20)]">
                      <img src="./assets/Svg/fa6-brands_digital-ocean.png" alt="Image 2"/> <!-- Replace 'img_2' with your actual image path -->
                    </div>
                    <div class="flex flex-col items-start gap-8">
                      <h1 class="text-black text-[28px] font-[700]">Real-Time Payment Alerts</h1>
                      <p class="text-black font-[400] text-[20px]">Business owners can receive instant notifications for payments received or outstanding invoices. This real-time feature keeps business owners informed about the financial status of their transactions.</p>
                    </div>
                  </div>
                  <div style="background-color: white;" class="relative rounded-md p-7">
                    <div class="absolute right-[1rem] top-[1rem] bg-[rgba(29, 167, 86, 0.20)]">
                      <img src="./assets/Svg/streamline_payment-10.svg" alt="Image 3"/> <!-- Replace 'img_3' with your actual image path -->
                    </div>
                    <div class="flex flex-col items-start gap-8">
                      <h1 class="text-black text-[28px] font-[700]">Real-Time Payment Alerts</h1>
                      <p class="text-black font-[400] text-[20px]">Business owners can receive instant notifications for payments received or outstanding invoices. This real-time feature keeps business owners informed about the financial status of their transactions.</p>
                    </div>
                  </div>
                  <div style="background-color: rgba(211, 238, 136, 0.40);" class="relative rounded-md p-7">
                    <div class="absolute right-[1rem] top-[1rem] bg-[rgba(29, 167, 86, 0.20)]">
                      <img src="./assets/Svg/carbon_continuous-integration.svg" alt="Image 4"/> <!-- Replace 'img_4' with your actual image path -->
                    </div>
                    <div class="flex flex-col items-start gap-8">
                      <h1 class="text-black text-[28px] font-[700]">Real-Time Payment Alerts</h1>
                      <p class="text-black font-[400] text-[20px]">Business owners can receive instant notifications for payments received or outstanding invoices. This real-time feature keeps business owners informed about the financial status of their transactions.</p>
                    </div>
                  </div>
                </div>
                <div class="capitalize px-8 rounded-[20px] py-2 bg-[#1DA756] text-white">
                  More features
                </div>
              </div>
            </div>
            
          </section> 
          <!--  pricing  -->
 
              <div class="p-9 flex flex-col gap-8 overflow-none items-start   bg-[#3C413F]">
                <div class="px-6 py-2 bg-[#D3EE88] text-[1.4rem] font-[400] rounded-full text-center capitalize text-black">Our pricing</div>
                <div class="text-white font-[700] text-[48px]">Clear-Cut Pricing That Fits Your Need</div>
                <div class="flex justify-between items-center w-full gap-4">
                  <div class="bg-white rounded-[30px] flex flex-col  px-12 py-8 items-center justify-center gap-10  ">
                    <div class=" px-2  flex  justify-between w-full ">
                      <p class="capitalize bg-Accent_4 rounded-[20px] px-2  flex justify center items-center text-white font-[700] text-[18px]"> BASIC PLAN</p>
                      <h1  class="text-[32px] font-[700]">Free</h1>
                    </div> 
                    <div class="text-[rgba(13, 18, 14, 0.70)] text-[25px] font-[400]">
                      With our Basic Plan, enjoy essential features to streamline your payment management without breaking the bank. 
                    </div>
                      <div>
                        <span style="background:rgba(13, 18, 14, 0.70); width: 24rem ;" class="w-[14rem] flex h-1"></span>
                      </div>
                      <div class="list">
                          <ul style="list-style: disc;" class="flex flex-col gap-4 text-[24px] font-[400]">
                            <li>All Standard PLan features</li>
                            <li>Advance reporting and analytics</li>
                            <li>Priority Customer Support</li> 
                            <li>Api for third party integrations</li>
                          </ul>
                      </div>
                      <div styles="width:100%;" class="flex flex-col">
                        <div class="capitalize flex justify-center items-start px-3 py-2 rounded-md text-white bg-green"> start now</div>
                      </div>
                  </div> 
                  <div class="bg-Accent_4 rounded-[30px] flex flex-col  px-12 py-8 items-center justify-center gap-10  ">
                    <div class=" px-2  flex  justify-between w-full ">
                      <p class="capitalize bg-green rounded-[20px] px-2  flex justify center items-center text-white font-[700] text-[18px]"> STANDARD PLAN</p>
                      <h1  class="text-[32px] font-[700]">$20.00</h1>
                    </div> 
                    <div class="text-[rgba(13, 18, 14, 0.70)] text-[25px] font-[400]">
                      Upgrade to our Standard Plan with more advanced features and get control over your business finances.
                    </div>
                      <div>
                        <span style="background:rgba(13, 18, 14, 0.70); width: 24rem ;" class="w-[14rem] flex h-1"></span>
                      </div>
                      <div class="list">
                          <ul style="    list-style: disc;" class="flex flex-col gap-4   text-[24px] font-[400]">
                            <li>All Basic Plan features</li>
                            <li>Expense tracking and reporting</li>
                            <li>Payment reminders and cltent communication</li> 
                            <li>Integration with accounting software</li>
                          </ul>
                      </div>
                      <div styles="width:100%;" class="flex flex-col">
                        <div class="capitalize flex justify-center items-start px-3 py-2 rounded-md text-white bg-green"> start now</div>
                      </div>
                  </div> 
                  <div class="bg-green rounded-[30px] flex flex-col  px-12 py-8 items-center justify-center gap-10  ">
                    <div class=" px-2  flex  justify-between w-full ">
                      <p class="capitalize bg-Accent_4 rounded-[20px] px-1  flex justify center items-center text-black  font-[700] text-[18px]">PREMIUM PLAN </p>
                      <h1  class="text-[32px] font-[700]">$40.00</h1>
                    </div> 
                    <div class="text-[rgba(13, 18, 14, 0.70)] text-[25px] font-[400]">
                      Unlock the full potential of our payment management app with the Premium Plan which offers comprehensive tools for financial success.
                    </div>
                      <div>
                        <span style="background:rgba(13, 18, 14, 0.70); width: 24rem ;" class="w-[14rem] flex h-1"></span>
                      </div>
                      <div class="list">
                          <ul style="    list-style: disc;" class="flex flex-col gap-4 text-[24px] font-[400]">
                            <li>Invoicing and transaction tracking</li>
                            <li>Real-time payment alerts</li>
                            <li>Basic reporting and analytics</li> 
                            <li>Multi-currency support</li>
                          </ul>
                      </div>
                      <div styles="width:inherit;">
                        <div class="capitalize flex justify-center items-center px-6 py-4 rounded-full text-black text-2xl font-[700] bg-white"> start now</div>
                      </div>
                  </div> 
                </div>
              </div>
 
            <!-- Testimonials -->
            <section>
                <div class="flex flex-col gap-8  items-start">
                  <div class="flex flex-col gap-4 items-start">
                      <p class="bg-Accent_4 rounded-full py-1 px-4 text-black text-[18px] font-[400]capitalize">testimonials</p>
                      <h1 class="text-[48px] font-[700]"> What <span class="text-green"> Our Customers</span></h1>
                  </div>
                  <div class="flex gap-4 items-center">
                    <i class="uil uil-angle-left-b font-[900] text-[2.5rem]  p-2 bg-Accent_1 flex items-center rounded-full"></i>
                      <div class="flex items-center gap-4">
                        <div class="">
                          <img class="w-[60rem]" src="./assets/Rectangle 16.png"/>
                        </div>
                        <div class="flex flex-col text-white gap-4 p-8 rounded-[25px] bg-Accent_1 relative">
                          <div class="text-white text-[24px] font-400">
                            “As a busy restaurant owner, managing payments used to be a headache. FlexEase has simplified the process for us. It's intuitive, and the reporting features help us analyse sales trends”. 
                          </div>
                          <div class=" flex justify-between items-center">
                              <div class="flex flex-col gap-2 items-start">
                                  <h2 class="text-[20px] font-[600]">Michael Chang</h2>
                                  <p class="text-[16px] font-[400]">Resturant Owner</p>
                              </div>
                              <div class="flex items-center">
                                  <img src="./assets/Svg/star.svg" alt=""> 
                                  <img src="./assets/Svg/star.svg" alt=""> 
                                  <img src="./assets/Svg/star.svg" alt="">
                                  <img src="./assets/Svg/star.svg" alt="">
                                  <img src="./assets/Svg/star.svg" alt="">
                              </div>
                          </div>
                        </div>
                      </div>
                    <i class="uil uil-angle-right-b font-[900] text-[2.5rem] p-2 bg-Accent_4 flex items-center rounded-full"></i>
                  </div>
                </div>
            </section>
            <!-- unlock  -->
            <section>
              <div class="flex w-full p-9 rounded-[25px] h-[484px] flex-col mt-8 bg-green justify-between items-center">
                <div class="flex gap-6 row">
                  <div class="  text-white text-[48px] font-[700]">
                      Unlock Financial Freedom With  <span class="text-black">Effortless Payment</span>  Management
                    </div>
                    <div class="font-[400px] text-[20px] text-Accent_1">Seamless integration, actionable insights that empowers your business to focus on growth and success</div>
                </div>
                <div class="capitalize rounded-full bg-white py-2 px-4 text-black text-[18px] font-[700]">
                     Get started
                </div>
              </div>
            </section>
            <!-- footer  -->
            <section>
              <div class="flex flex-col justify-center gap-8 items-center">
                  <div class="flex justify-between items-center">
                    <div class="flex gap-4  mr-6 w-full flex-col">
                      <h1 class="text-[26px] font-[700] capitalize text-Accent_1">Flexease</h1>
                      <p class="font-[400] text-[18px]">Seamless integration, actionable insights that empowers your business to focus on growth and success</p>
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <div class="font-[18px] font-[600]">Quick Links</div>
                        <div  class="flex  no-underline flex-col items-start text-[16px] font-[400]">
                            <a href="">About Us</a>
                            <a href=""> Our Team</a>
                            <a href="">Careers</a>
                            <a href=""> Blog</a>
                        </div>
                    </div>
                    <div class="flex w-full flex-col gap-4">
                      <div class="font-[18px] font-[600]"> Resources</div>
                      <div  class="flex  no-underline flex-col items-start text-[16px] font-[400]">
                          <a href="">FAQs</a>
                          <a href="">Terms of Services</a>
                          <a href="">Privacy Policy</a>
                          <a href="">Support</a>
                      </div>
                  </div>
                  <div class="flex flex-col w-full gap-4">
                      <h1 class="text-[18px] font-[600]">Newsletter</h1>
                      <p class="text-\[16px\] font-[600]"></p>
                      <div class="relative flex bg-Accent_1 justify-between pr-4 rounded-full items-center">
                      <input type="text" class="p-4 bg-transparent outline-none rounded-full text-white" name="" id="">
                      <span class="  bg-green   py-2 px-4 rounded-full">send</span>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="py-4">
                      <p class="text-\[18px\] font-[400] text-black">Copyright © FlexEase 2023. All rights reserved.</p>
                  </div>
              </div>
            </section>
</x-app-layout>
