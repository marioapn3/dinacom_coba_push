@component('mail::message')
# Hi {{ $user->name }}

Terima kasih telah mendaftar event DINACOM 2023 merupakansebuah kompetisi di bidang teknologi informasi tingkat nasional yang diselenggarakan oleh Dian Nuswantoro Computer Club (DNCC). Produk yang diperlombakan dalam DINACOM merupakan aplikasi berbasis website, aplikasi mobile, dan aplikasi desktop.

Silahkan lanjutkan pendaftaran anda dan lengkapi data persyaratan pada dashboard anda.

@component('mail::button', ['url' => ''])
Login
@endcomponent

Thanks,<br>
Team Dinacom 2023
@endcomponent
 