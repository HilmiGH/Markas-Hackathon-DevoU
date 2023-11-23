@section('title', 'MARKAS | CHECKOUT')
<div x-data="{ open: false }" class="">
    <section class="" style="padding-left: 5rem; padding-right: 5rem; padding-top: 4rem">
        <a href="{{ url('/booking') }}" style="border-radius: 24px; padding-block: 20px; padding-inline: 40px; background-color: white; border: 2px solid #000;">
            <svg class="inline-block mr-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 13 21" fill="none">
                <path d="M11.5 19.5L2 10.5L11.5 1" stroke="black" stroke-width="2"/>
              </svg>
            <span class="font-lexendMega">Kembali ke pemilihan ruangan</span>
            </a>
        <div style="display: flex; margin-top: 3rem; margin-bottom: 3rem ; justify-content: center">
            <div class="font-lexendMega">
                <span class="text-redMarkas">1 /</span>
                <span class="">Pilih Tanggal</span>
            </div>
            <svg class="inline-block ml-4 mr-10" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 12 21" fill="none">
                <path d="M1 1L10.5 10L1 19.5" stroke="#BCBCBC" stroke-width="2"/>
              </svg>
            <div class="font-lexendMega" style="">
                <span class="text-redMarkas">2 /</span>
                <span class="text-[#BCBCBC]">Pesan</span>
            </div>
            <svg class="inline-block ml-4 mr-10" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 12 21" fill="none">
                <path d="M1 1L10.5 10L1 19.5" stroke="#BCBCBC" stroke-width="2"/>
              </svg>
            <div class="font-lexendMega">
                <span class="text-redMarkas">3 /</span>
                <span class="text-[#BCBCBC]">Selesai</span>
            </div>
        </div>
    </section>
    <section style="padding-left: 5rem; margin-top: 3rem; margin-bottom: 1rem; padding-right: 5rem;">
        <div class="mb-12 flex justify-center">
            <button>
                <svg class="inline-block mr-8" width="24" height="24" viewBox="0 0 14 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.5 20.75L3 11.75L12.5 2.25" stroke="black" stroke-width="4"/>
                  </svg>
            </button>
            <h1 x-show="!open" class="font-lexendMega font-bold text-[24px]">November 2023</h1>
            <h1 x-show="open" class="font-lexendMega font-bold text-[24px]">Desember 2023</h1>
            <button x-on:click="open = ! open; month = 'December'">
                <svg class="inline-block ml-8" width="24" height="24" viewBox="0 0 14 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.5 21.5277L11 11.771L1.5 1.47216" stroke="black" stroke-width="4"/>
                  </svg>
            </button>
        </div>
        <table x-show="!open" class="font-lexendMega w-full border-collapse rounded-[24px]">
            <tr class="bg-redMarkas" style="border-top-left-radius: 24px; border-top-right-radius: 24px;">
                <th class="border-2 rounded-tl-[24px] p-2 border-black" style="color: rgb(255 255 255); padding-block: 26px; padding-inline: 47px">Minggu</th>
                <th class="border-2 p-2 border-black" style="color: rgb(255 255 255); padding-block: 26px; padding-inline: 47px">Senin</th>
                <th class="border-2 p-2 border-black" style="color: rgb(255 255 255); padding-block: 26px; padding-inline: 47px">Selasa</th>
                <th class="border-2 p-2 border-black" style="color: rgb(255 255 255); padding-block: 26px; padding-inline: 47px">Rabu</th>
                <th class="border-2 p-2 border-black" style="color: rgb(255 255 255); padding-block: 26px; padding-inline: 47px">Kamis</th>
                <th class="border-2 p-2 border-black" style="color: rgb(255 255 255); padding-block: 26px; padding-inline: 47px">Jumat</th>
                <th class="border-2 p-2 border-black" style="color: rgb(255 255 255); border-top-right-radius: 24px; padding-block: 26px; padding-inline: 47px">Sabtu</th>
            </tr>
            <tr class="bg-white h-[8rem]" style="border: 2px solid #000">
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">29</button></td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">30</button></td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">31</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">1</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">2</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">3</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">4</td>
            </tr>
            <tr class="bg-white h-[8rem] border-black border-2">
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">5</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">6</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">7</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">8</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">9
                    <svg class="mx-auto" width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="22.5" cy="22.5" r="22.5" fill="#D90027"/>
                      </svg>
                </td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">10
                    <svg class="mx-auto" width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="22.5" cy="22.5" r="22.5" fill="#D90027"/>
                      </svg>
                </td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">11</td>
            </tr>
            <tr class="bg-white h-[8rem] border-black">
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">12</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">13</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">14</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">15</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">16</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">17</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">18</td>
            </tr>
            <tr class="bg-white h-[8rem] border-black">
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">19</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">20</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">21
                    <svg class="mx-auto" width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="22.5" cy="22.5" r="22.5" fill="#D90027"/>
                      </svg>
                </td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">22
                    <svg class="mx-auto" width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="22.5" cy="22.5" r="22.5" fill="#D90027"/>
                      </svg>
                </td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">23
                    <svg class="mx-auto" width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="22.5" cy="22.5" r="22.5" fill="#D90027"/>
                      </svg>
                </td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">24</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">25</td>
            </tr>
            <tr class="bg-white h-[8rem] border-black border-2" style="border-bottom-left-radius: 24px; border-bottom-right-radius: 24px; ">
                <td  class="" style="border: 2px solid #000"><button class="w-full h-[8rem]" style="border-bottom-left-radius: 24px">26</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">27</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">28</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">29</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">30</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">1</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]" style="border-bottom-right-radius: 24px">2</td>
            </tr>
        </table>
        <table x-show="open" class="font-lexendMega w-full border-collapse rounded-[24px]">
            <tr class="bg-redMarkas" style="border-top-left-radius: 24px; border-top-right-radius: 24px;">
                <th class="border-2 rounded-tl-[24px] p-2 border-black" style="color: rgb(255 255 255); padding-block: 26px; padding-inline: 47px">Minggu</th>
                <th class="border-2 p-2 border-black" style="color: rgb(255 255 255); padding-block: 26px; padding-inline: 47px">Senin</th>
                <th class="border-2 p-2 border-black" style="color: rgb(255 255 255); padding-block: 26px; padding-inline: 47px">Selasa</th>
                <th class="border-2 p-2 border-black" style="color: rgb(255 255 255); padding-block: 26px; padding-inline: 47px">Rabu</th>
                <th class="border-2 p-2 border-black" style="color: rgb(255 255 255); padding-block: 26px; padding-inline: 47px">Kamis</th>
                <th class="border-2 p-2 border-black" style="color: rgb(255 255 255); padding-block: 26px; padding-inline: 47px">Jumat</th>
                <th class="border-2 p-2 border-black" style="color: rgb(255 255 255); border-top-right-radius: 24px; padding-block: 26px; padding-inline: 47px">Sabtu</th>
            </tr>
            <tr class="bg-white h-[8rem]" style="border: 2px solid #000">
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">2</button></td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">3</button></td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">4</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">5</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">6</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">7</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">8</td>
            </tr>
            <tr class="bg-white h-[8rem] border-black border-2">
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">9</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">10</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">11</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">12</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">13
                    <svg class="mx-auto" width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="22.5" cy="22.5" r="22.5" fill="#D90027"/>
                      </svg>
                </td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">14
                    <svg class="mx-auto" width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="22.5" cy="22.5" r="22.5" fill="#D90027"/>
                      </svg>
                </td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">15</td>
            </tr>
            <tr class="bg-white h-[8rem] border-black">
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">16</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">17</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">18</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">19</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">20</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">21</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">22</td>
            </tr>
            <tr class="bg-white h-[8rem] border-black">
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">23</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">24</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">25
                    <svg class="mx-auto" width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="22.5" cy="22.5" r="22.5" fill="#D90027"/>
                      </svg>
                </td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">26
                    <svg class="mx-auto" width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="22.5" cy="22.5" r="22.5" fill="#D90027"/>
                      </svg>
                </td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">27
                    <svg class="mx-auto" width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="22.5" cy="22.5" r="22.5" fill="#D90027"/>
                      </svg>
                </td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">28</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">28</td>
            </tr>
            <tr class="bg-white h-[8rem] border-black border-2" style="border-bottom-left-radius: 24px; border-bottom-right-radius: 24px; ">
                <td  class="" style="border: 2px solid #000"><button class="w-full h-[8rem]" style="border-bottom-left-radius: 24px">26</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">29</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">30</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">31</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">1</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]">2</td>
                <td class="" style="border: 2px solid #000"><button class="w-full h-[8rem]" style="border-bottom-right-radius: 24px">3</td>
            </tr>
        </table>
    </section>
    <section style="padding-left: 5rem; padding-right: 5rem; margin-top: 5rem">
        <table class="font-lexendMega w-[95.5rem] border-collapse">
            <tr class="border-black" style="border: 2px solid #000">
                <th class="bg-redMarkas p-4 pl-8 pr-8 w-max border-black" style="color: rgb(255 255 255); border: 2px solid #000">

                    <span x-show="!open" class="float-left">21 November 2023</span>
                    <span x-show="open" class="float-left">14 Desember 2023</span>
                    <button class="float-right">
                        <svg class="inline-block float-right" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.9997 6.99985V12.9999C29.9997 13.2651 29.8943 13.5194 29.7068 13.707C29.5193 13.8945 29.2649 13.9999 28.9997 13.9999H22.9997C22.7345 13.9999 22.4801 13.8945 22.2926 13.707C22.105 13.5194 21.9997 13.2651 21.9997 12.9999C21.9997 12.7346 22.105 12.4803 22.2926 12.2927C22.4801 12.1052 22.7345 11.9999 22.9997 11.9999H26.4247L23.1009 8.95485L23.0697 8.92485C21.6798 7.53546 19.9113 6.58642 17.9851 6.19628C16.059 5.80615 14.0606 5.99221 12.2396 6.73123C10.4185 7.47025 8.85564 8.72946 7.74611 10.3516C6.63658 11.9737 6.0296 13.8867 6.00101 15.8518C5.97242 17.8168 6.52348 19.7468 7.58535 21.4004C8.64722 23.0541 10.1728 24.3583 11.9716 25.15C13.7703 25.9417 15.7625 26.1858 17.6991 25.8518C19.6358 25.5179 21.4312 24.6207 22.8609 23.2724C23.0537 23.09 23.311 22.9917 23.5763 22.9991C23.8415 23.0065 24.093 23.1189 24.2753 23.3117C24.4576 23.5045 24.5559 23.7618 24.5485 24.0271C24.5412 24.2923 24.4287 24.5438 24.2359 24.7261C22.0128 26.8345 19.0636 28.0067 15.9997 27.9999H15.8347C13.8694 27.9729 11.9407 27.4637 10.2183 26.5168C8.49589 25.57 7.03241 24.2146 5.95651 22.5697C4.8806 20.9248 4.22521 19.0408 4.04793 17.0833C3.87066 15.1258 4.17693 13.1547 4.93982 11.3433C5.70271 9.53188 6.89888 7.93559 8.42317 6.69472C9.94747 5.45385 11.7532 4.6064 13.6817 4.22684C15.6103 3.84729 17.6025 3.94726 19.4833 4.51796C21.3642 5.08866 23.076 6.11263 24.4684 7.49985L27.9997 10.7249V6.99985C27.9997 6.73464 28.105 6.48028 28.2926 6.29275C28.4801 6.10521 28.7345 5.99985 28.9997 5.99985C29.2649 5.99985 29.5193 6.10521 29.7068 6.29275C29.8943 6.48028 29.9997 6.73464 29.9997 6.99985Z" fill="white"/>
                          </svg>
                    </button>
                </th>
            </tr>
            <tr class="bg-white border-black p-8" style="border: 2px solid #000; border-bottom-left-radius: 24px; border-bottom-right-radius: 24px; padding: 50px">
                <table class=" w-[95.5rem]">
                    <tr class=" bg-white h-[3rem]" style="border: 2px solid #000">
                        <th class="font-bold font-lexendMega border-black" style="border: 2px solid #000">Jam</th>
                        <th class="font-bold font-lexendMega border-black" style="border: 2px solid #000">Kegiatan</th>
                    </tr>
                    <tr class="border-black bg-white h-[3rem]" style="border: 2px solid #000">
                        <td class="border-black font-lexendMega" style="text-align: center; border: 2px solid #000">12:00 - 14.00</td>
                        <td class="border-black font-lexendMega" style="text-align: center; border: 2px solid #000"></td>
                    </tr>
                    <tr class="border-black bg-white h-[3rem]" style="border: 2px solid #000">
                        <td class="border-black font-lexendMega" style="text-align: center; border: 2px solid #000">14:00 - 16.00</td>
                        <td class="border-black font-lexendMega" style="text-align: center; border: 2px solid #000"></td>
                    </tr>
                    <tr class="border-black bg-white h-[3rem]" style="border: 2px solid #000">
                        <td class="border-black font-lexendMega" style="text-align: center; border: 2px solid #000">16:00 - 18:00</td>
                        <td class="border-black font-lexendMega" style="text-align: center; border: 2px solid #000">
                            <svg class="inline-block mr-4" width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="22.5" cy="22.5" r="22.5" fill="#D90027"/>
                              </svg>
                              Sekolah Beta Intensif Hipster</td>
                    </tr>
                    <tr class="border-black bg-white h-[3rem]" style="border: 2px solid #000">
                        <td class="border-black font-lexendMega" style="text-align: center; border: 2px solid #000">18:00 - 20:00</td>
                        <td class="border-black font-lexendMega" style="text-align: center; border: 2px solid #000">
                            <svg class="inline-block mr-4" width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="22.5" cy="22.5" r="22.5" fill="#D90027"/>
                              </svg>
                              Hackathon Build Web Markas</td>
                    </tr>
                    <tr class="border-black bg-white h-[3rem]" style="border: 2px solid #000">
                        <td class="border-black font-lexendMega" style="text-align: center; border: 2px solid #000">20:00 - 22:00</td>
                        <td class="border-black font-lexendMega" style="text-align: center; border: 2px solid #000"><img src="" alt=""></td>
                    </tr>
                    <tr class="border-black bg-white h-[3rem]" style="border: 2px solid #000">
                        <td class="border-black font-lexendMega" style="text-align: center; border: 2px solid #000">22:30 - 23:00</td>
                        <td class="border-black font-lexendMega" style="text-align: center; border: 2px solid #000"><img src="" alt=""></td>
                    </tr>
                    <tr class="border-black bg-white h-[3rem]" style="border: 2px solid #000">
                        <td class="border-black font-lexendMega" style="text-align: center; border-bottom-left-radius: 24px; border: 2px solid #000">23:00 - 23:30</td>
                        <td class="border-black font-lexendMega" style="text-align: center; border-bottom-right-radius: 24px; border: 2px solid #000"><img src="" alt=""></td>
                    </tr>
                </table>
            </tr>
        </table>
        <a href="{{ url('/checkout-form') }}" class="bg-redMarkas mt-8 float-right" style="border-radius: 24px; padding-block: 16px; padding-inline: 45px;">
            <span class="font-lexendMega text-white" style="">
                Pilih Tanggal
            </span>
        </a>
    </section>
</div>
