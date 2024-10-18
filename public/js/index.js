
const colaboradores = Array.from({
    length: 15
}, (_, i) => `img/colaboradores${i + 1}.png`);
const slideTrack = document.querySelector('.slide-track');

// Función compacta para agregar imágenes (originales y duplicadas)
colaboradores.concat(colaboradores).forEach(src => {
    slideTrack.innerHTML += `
<div class="slide">
    <img src="<?= base_url('${src}') ?>" alt="" class="easeout">
</div>`;
});
