@section('judul')
<div class="judulhome">
    Aplikasi Pelayanan <br> Desa Ngrendeng
</div>
@endsection

@section('konten')
<div class="kotak1 rounded-3" style="">
    <div class="row">
        <div class="col me-0 mb-0">
            <p class="subjudul mb-0" >
                Pelacakan Surat
            </p>
        </div>
        <div class="col me-0 ms-0 mt-2 text-end">
            <img src="{{asset('img/lacak.png')}}">
        </div>
    </div>
            <div class="isi" style="margin-top:-0.70rem">
                 Anda dapat melacak status <br> Surat Pengajuan yang telah <br> anda buat dan telah <br>disubmit disini
             </div>
    <div class="lck">
        <a href="/status_surat" class="biru">
        <label>
                Lacak Surat <svg class="ms-1 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none"> <path d="M1 1L5 6L1 11" stroke="#01B7BB" stroke-width="2"/> </svg>
        </label>
        </a>
    </div>
</div>
<a href="{{url('profil')}}" style="display:block;">
<div class="kotak2 rounded-3">
    <div class="row">
        <div class="col-2">
           <img src="{{asset('img/monogram.png')}}" alt="">
        </div>
        <div class="col-9">
            <div class="nama text-start mb-1"> <b>Nama</b> </div>
            <div class="nohp text-start mb-1"> <b>000</b></div>
            <div class="alamat text-start"> Alamat </div>
        </div>
        <div class="col-1 mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
             <path d="M1 1L5 6L1 11" stroke="#9C9D9F" stroke-width="2"/>
            </svg>
        </div>
    </div>
</div>
</a>

<div class="container-home">
    <p class="subjudul">
        Pengajuan Surat
    </p>
    <div class="kotak3">
        <a href="/suratkehilangan" class="hitam">
        <div class="row">
            <div class="col-2 me-0">
                <img src="{{asset('img/surat.png')}}" alt="">
            </div>
            <div class="col-10" style="margin-left:-1rem;">
                Surat Kehilangan
            </div>
        </div>
        </a>
        <hr class="hr" />
        <div class="row">
            <div class="col-2 me-0">
                <img src="{{asset('img/surat.png')}}" alt="">
            </div>
            <div class="col-10" style="margin-left:-1rem;">
                Surat Keterangan Usaha
            </div>
        </div>
        <hr class="hr" />
        <div class="row">
            <div class="col-2 me-0">
                <img src="{{asset('img/surat.png')}}" alt="">
            </div>
            <div class="col-10" style="margin-left:-1rem;">
                SKTM untuk Sekolah
            </div>
        </div>
        <hr class="hr" />
        <div class="row">
            <div class="col-2 me-0">
                <img src="{{asset('img/surat.png')}}" alt="">
            </div>
            <div class="col-10" style="margin-left:-1rem;">
                Surat ...
            </div>
        </div>
        <hr class="hr" />
        <div class="row">
            <div class="col-2 me-0">
                <img src="{{asset('img/surat.png')}}" alt="">
            </div>
            <div class="col-10" style="margin-left:-1rem;">
                Surat ...
            </div>
        </div>
    </div>
    <div class="kotak4">
        <div class="row">
            <div class="col-2">
                <img src="{{asset('img/wa.png')}}" alt="">
            </div>
            <div class="col-9" style="margin-left:-1rem;">
                Kontak Pengurus Desa
            </div>
            <div class="col-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                <path d="M1 1L5 6L1 11" stroke="#9C9D9F" stroke-width="2"/>
                </svg>
            </div>
        </div>
    </div>
    <div class="kotak5">
        <p class="text-danger text-center">Keluar Akun</p>
    </div>
</div>
@endsection


