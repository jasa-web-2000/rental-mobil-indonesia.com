<div class="gap-x-6 gap-y-4 grid">
    <x-location.archive.select-location model="selectedProvince" id="province" :data="$provinceData" label="Provinsi" />
    <x-location.archive.select-location model="selectedRegency" id="regency" :data="$regencyData" label="Kab/kota" />
    <x-location.archive.select-location model="selectedDistrict" id="district" :data="$districtData" label="Kecamatan" />

</div>
