<div>
    <section class="" style="padding-left: 5rem; padding-right: 5rem; padding-top: 4rem">
        <a href="" style="border-radius: 24px; padding-block: 20px; padding-inline: 20px; background-color: white; border: 2px solid #000;">
            <svg class="inline-block mr-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 13 21" fill="none">
                <path d="M11.5 19.5L2 10.5L11.5 1" stroke="black" stroke-width="2"/>
              </svg>
            <span class="font-lexendMega">Kembali ke pemilihan ruangan</span>
        </a>
        <div style="display: flex; margin-top: 3rem; margin-bottom: 3rem ; justify-content: center">
            <div class="font-lexendMega">
                <span class="text-redMarkas">1 /</span>
                <span class="text-[#BCBCBC]">Pilih Tanggal</span>
            </div>
            <svg class="inline-block ml-4 mr-10" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 12 21" fill="none">
                <path d="M1 1L10.5 10L1 19.5" stroke="#BCBCBC" stroke-width="2"/>
              </svg>
            <div class="font-lexendMega" style="">
                <span class="text-redMarkas">2 /</span>
                <span class="">Pesan</span>
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
    <section style="padding-left: 5rem; padding-right: 5rem;">
        <form action="" style="display: flex; flex-direction: column">
            <div style="display: flex; flex-direction: column">
                <label class="font-lexendMega font-bold ml-4 mb-4 mt-4" for="nama">Nama</label>
                <input class="font-lexendMega" id="name" name="name" style="border: 1px solid #000; border-radius: 36px; padding: 16px" type="text">
            </div>
            <div style="display: flex; flex-direction: column">
                <label class="font-lexendMega font-bold ml-4 mb-4 mt-8" for="gender">Gender</label>
                <div class="flex align-middle">
                    <input class="font-lexendMega h-6 w-6 ml-4 mr-2" type="radio" name="gender" id="male" value="male">
                    <label class="font-lexendMega font-semibold mr-8" for="male">Male</label>
                    <input class="font-lexendMega h-6 w-6 mr-2" type="radio" name="gender" id="female" value="female">
                    <label class="font-lexendMega font-semibold" for="female">Female</label>
                </div>
            </div>
            <div style="display: flex; flex-direction: column">
                <label class="font-lexendMega font-bold ml-4 mb-4 mt-8" class="font-lexendMega" for="email">Email</label>
                <input class="font-lexendMega" id="email" name="email" style="border: 1px solid #000; border-radius: 36px; padding: 16px" type="text">
            </div>
            <div style="display: flex; flex-direction: column">
                <label class="font-lexendMega font-bold ml-4 mb-4 mt-8" for="nomor_telepon">Nomor Telepon</label>
                <input class="font-lexendMega" id="nomor_telepon" name="nomor_telepon" style="border: 1px solid #000; border-radius: 36px; padding: 16px" type="text">
            </div>
            <div style="display: flex; flex-direction: column">
                <label class="font-lexendMega font-bold ml-4 mb-4 mt-8" for="instansi">Instansi/Komunitas/Perusahaan</label>
                <input class="font-lexendMega" id="instansi" name="instansi" style="border: 1px solid #000; border-radius: 36px; padding: 16px" type="text">
            </div>
            <div style="display: flex; flex-direction: column">
                <label class="font-lexendMega font-bold ml-4 mb-4 mt-8" for="jenis_kegiatan">Jenis Kegiatan</label>
                <input class="font-lexendMega" id="nama_kegiatan" name="nama_kegiatan" style="border: 1px solid #000; border-radius: 36px; padding: 16px" type="text">
            </div>
            <div style="display: flex; flex-direction: column">
                <label class="font-lexendMega font-bold ml-4 mb-4 mt-8" for="nama_kegiatan">Nama Kegiatan</label>
                <input class="font-lexendMega" id="nama_kegiatan" name="nama_kegiatan" style="border: 1px solid #000; border-radius: 36px; padding: 16px" type="text">
            </div>
            <div style="display: flex; flex-direction: column">
                <label class="font-lexendMega font-bold ml-4 mb-4 mt-8" for="deskripsi_singkat">Deskripsi Singkat</label>
                <textarea class="font-lexendMega" id="deskripsi_kegiatan" name="deskripsi_kegiatan" cols="30" rows="10" style="border: 1px solid #000; border-radius: 36px; padding: 16px"></textarea>
            </div>
        </form>
        <a href="{{ url('/checkout-form') }}" class="bg-redMarkas mt-8 float-right" style="border-radius: 24px; padding-block: 16px; padding-inline: 45px;">
            <span class="font-lexendMega text-white" style=" border-radius: 36px; padding: 16px" style="">
                Pesan
            </span>
        </a>
    </section>
</div>
