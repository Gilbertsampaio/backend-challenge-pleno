<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . "/views/templates/header.php";
?>

<div class="container listagem">
    <section class="home">
        <div class="col-xxl-8 px-4">
            <div class="row flex-lg-row-reverse align-items-center">
                <div class="col-10 col-sm-8 col-lg-7" style="margin-top: -10px;">
                    <img src="<?= base_url(); ?>/assets/img/fundo-coca.jpg" class="img-fluid">
                </div>
                <div class="col-lg-5 listaMobile" style="margin-top:-270px;">
                    <div class="col-lg-12 tabela">
                        <table class="table table-dark table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>Nome Pessoa</th>
                                    <th>Tarefas</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($pessoas as $pes) {
  
                                    echo "<tr>";
                                    echo "<td>" . $pes['nome'] . "</td>";
                                    echo "<td class='center'>" . $pes['tarefas'] . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="bottom listagem">
    <div class="px-4 py-5 my-5 text-center">
        <a id="tituloNewsletter" class="fw-bold" style="margin-bottom: 0px;">
            <svg style="width:150px; height: auto;" viewBox="0 0 55 17" class="logo-coca" data-test="LogoLettering">
                <use fill="#fff" xlink:href="#logo-lettering">
                    <svg id="logo-lettering" viewBox="0 0 55 17" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.95 16.695c-1.275-.886-2.826-1.278-4.239-1.219-1.425.052-2.07 1.105-2.07 1.105-.643-1.105-1.912-1.784-3.879-1.769-3.176.037-6.327 1.485-8.822 1.485-2.398 0-4.142-1.485-4.083-4.124.1-4.628 4.058-8.795 7.015-10.672C9.57.424 10.995.103 11.93.204c.678.078 1.494.852.982 1.992-.76 1.673-1.804 1.534-1.767.731.022-.518.37-.846.635-1.025.169-.114.463-.145.613-.151.153-.123.265-1.04-.954-.738-1.219.3-2.685 1.482-4.083 3.007-1.397 1.525-3.573 4.411-4.11 7.443-.25 1.408-.082 3.964 3.285 3.933 2.857-.022 7.075-1.88 10.948-1.85 1.507.013 2.81.414 3.836 1.038 1.007.614 2.21 1.506 2.636 2.111zm.92-8.384h.581s-2.932 4.186-4.596 3.998c-.922-.105-.65-1.235-.65-1.235s-1.303 1.503-2.494 1.204c-1.085-.275-.385-2.053-.385-2.053-.122.05-2.467 2.66-4.111 2.034-1.723-.654-.832-2.84-.503-3.497.278-.553.584-1.096.584-1.096s-.265.077-.425.11c-.166.041-.416.087-.416.087s-.816 1.31-1.313 1.964c-.497.651-2.616 2.898-3.864 2.45-1.247-.447-.938-2.17-.237-3.54 1.134-2.223 3.832-4.949 5.458-4.544 1.641.413.284 3.044.284 3.044s.322.043 1.104-.485c1.129-.76 2.614-2.803 4.224-2.562.75.108 1.46.876.494 2.334-.31.466-.826.886-1.223.472-.244-.253-.031-.726.228-1.044.366-.453.87-.395.87-.395s.262-.602-.41-.59c-.55.013-1.935 1.273-2.717 2.548-.719 1.17-1.803 3.16-.713 3.596 1 .398 2.905-1.837 3.786-3.004.885-1.173 2.892-3.828 4.58-3.933.576-.04.923.485.923.485l.19-.306h1.685s-3.173 5.24-3.423 5.631c-.194.315-.45 1.01.266.617.728-.395 2.223-2.29 2.223-2.29zm-13.074-.534c-.028-.01-.447-.13-.863-.39-.413-.261-.604-.65-.622-.678-.013-.028-.032-.006-.044.018-.016.025-.106.136-.707 1.007-.597.87-1.488 2.655-.656 2.96.534.195 1.432-.731 1.92-1.346.446-.568.984-1.441 1.01-1.494.015-.056-.004-.068-.038-.077zm.672-2.785c-.444-.33-1.57.442-1.573 1.232-.006.806 1.016 1.037 1.145 1.044 0 0 .115.03.162-.065.031-.059.169-.312.322-.713.153-.402.353-1.186-.056-1.498zm8.581 4.362c.682-.92 2.555-4.146 2.555-4.146s-.029-.228-.25-.237c-.26-.013-.688.074-1.554 1.139-.863 1.062-1.526 1.914-2.014 2.794-.531.96-.766 1.636-.46 1.824.085.05.216.053.323.031.2-.05.46-.247.819-.658.169-.191.356-.447.581-.747zm7.569-4.998h-1.6l-.901 1.445h1.598l.903-1.445zm20.98 10.759a.568.568 0 00-.41.166.573.573 0 000 .818c.11.105.248.167.41.167a.57.57 0 00.578-.58.542.542 0 00-.168-.405.558.558 0 00-.41-.166zm.675.57a.643.643 0 01-.193.473.663.663 0 01-.479.198.656.656 0 01-.475-.198.625.625 0 01-.197-.472c0-.18.069-.34.2-.466a.634.634 0 01.475-.198.65.65 0 01.479.198c.125.126.19.284.19.466zm-.5-.141c0-.053-.015-.09-.047-.108-.03-.022-.087-.031-.156-.031h-.112v.266h.118a.409.409 0 00.125-.016c.044-.022.072-.055.072-.111zm-.444-.222h.257a.58.58 0 01.206.024.187.187 0 01.116.182c0 .065-.025.115-.075.146a.291.291 0 01-.107.04c.057.006.104.03.125.068a.217.217 0 01.044.114v.052c0 .016.003.031.003.053.003.021.003.034.006.037l.007.01h-.125v-.007c-.007-.003-.007-.003-.007-.006v-.084c0-.08-.018-.135-.068-.163-.025-.019-.075-.028-.144-.028h-.106v.287h-.129v-.725h-.003zM52.227 1.76c-1.178.753-2.823 1.433-4.395 1.284-.397.408-.822.877-1.254 1.39 2.732.53 5.118-1.136 6.393-2.563.794-.889 1.185-1.679 1.185-1.679s-.756.824-1.929 1.568zm-4.68 12.25c-.228.358-.481 1.043.263.617.91-.525 2.207-2.466 2.207-2.466h.588s-.772 1.21-1.782 2.309c-.925 1.012-2.051 1.929-2.839 1.84-.928-.109-.64-1.31-.64-1.31s-1.33 1.393-2.242 1.297c-1.238-.136-.86-1.648-.86-1.648s-1.4 1.7-2.354 1.648c-1.497-.086-1.122-1.89-.71-3.152.229-.676.435-1.207.435-1.207s-.15.037-.469.084c-.169.024-.472.04-.472.04s-.622 1.086-1.12 1.74c-.5.652-2.616 2.9-3.86 2.455-1.157-.417-.776-2.16-.103-3.544.972-2.019 3.73-4.92 5.317-4.541 1.645.395.038 3.362.038 3.362s.003.012.019.018c.03.013.118.022.315-.018.316-.059.604-.176.604-.176s1.657-3.424 3.486-5.665C45.193 3.452 48.838-.404 50.27.53c.35.225.194 1.018-.275 1.978a6.882 6.882 0 01-.65.167c.319-.565.525-1.04.588-1.377.215-1.154-2.52 1.281-4.474 3.908-1.954 2.627-3.126 5.005-3.126 5.005s.397-.223 1.01-.71c.64-.51 1.522-1.313 2.482-2.291a25.762 25.762 0 002.11-2.408c.213-.012.419-.03.622-.062a26.493 26.493 0 01-2.329 2.72c-.775.778-1.623 1.618-2.354 2.229-1.166.966-2.07 1.519-2.07 1.519s-1.713 3.401-.781 3.62c.547.13 1.629-1.515 1.629-1.515s1.406-2.124 2.257-3.078c1.157-1.3 2.15-2.053 3.148-2.071.581-.01.925.605.925.605l.272-.417h1.685c0 .003-3.138 5.263-3.392 5.659zm-9.456-2.072a3.466 3.466 0 01-.773-.488c-.378-.311-.569-.666-.584-.694-.013-.028-.032-.01-.047.018-.019.022-.085.078-.688.951-.597.87-1.516 2.667-.681 2.97.528.194 1.419-.729 1.907-1.34.447-.568.869-1.293.89-1.343.026-.05.004-.065-.025-.074zm.85-1.472c.156-.398.353-1.186-.063-1.494-.437-.33-1.563.441-1.57 1.228-.005.809.798 1.176.986 1.226.11.028.147.024.203-.062.031-.056.284-.497.444-.898zm9.66-1.109c.034-.058.05-.114.05-.114s-.031-.225-.25-.234c-.263-.013-.613.04-1.545 1.052a13.868 13.868 0 00-1.979 2.773c-.53.963-.74 1.676-.437 1.861.087.05.216.056.322.03.206-.049.44-.24.8-.65.166-.186.353-.46.572-.763.616-.824 2.157-3.43 2.467-3.955zm3.626-7.597c-1.178.753-2.823 1.433-4.395 1.284-.397.408-.822.877-1.254 1.39 2.732.53 5.118-1.136 6.393-2.563.794-.889 1.185-1.679 1.185-1.679s-.756.824-1.929 1.568zm-7.671 1.957c-1.295-.654-2.233-1.45-3.214-1.95-.941-.476-1.545-.674-2.301-.572a2.16 2.16 0 00-.313.074s.391 1.315-1.16 3.526c-1.572 2.241-3 2.229-3.404 1.608-.425-.648.122-1.972 1.038-3.152.96-1.231 2.642-2.26 2.642-2.26s-.538-.32-1.86.417c-1.285.72-3.502 2.433-5.553 5.32-2.054 2.886-2.46 4.476-2.754 5.726-.297 1.25-.025 2.59 1.379 2.59 1.406 0 3.038-2.118 3.501-2.853.853-1.373 1.41-3.47.247-3.18-.575.14-1.041.77-1.332 1.378-.303.62-.422 1.213-.422 1.213s-.484.173-1.138.654a8.538 8.538 0 00-1.078.945s.003-1 .81-2.618c.81-1.62 2.288-2.358 3.126-2.426.756-.062 1.74.57.906 2.91-.831 2.34-3.289 5.178-5.874 5.218-2.382.034-3.942-2.973-.628-8.215 3.664-5.8 7.978-7.579 9.378-7.776 1.398-.2 1.851.41 1.851.41S39.575.17 41.063.27c1.707.114 3.03 1.306 4.774 2.143-.456.438-.888.886-1.282 1.305zm-6.36-2.275s-1 .395-2.163 1.661c-1.166 1.269-1.838 2.686-1.338 3.066.194.142.635.166 1.445-.55.625-.559 1.266-1.287 1.703-2.334.516-1.253.354-1.824.354-1.843z"></path>
                    </svg>
                </use>
            </svg>
        </a>
    </div>
</section>

<svg viewBox="0 0 1366 354" role="presentation" class="Wave-module__wrapper--1-9Ka listagem" data-test="Wave">
    <path fill-rule="evenodd" clip-rule="evenodd" fill="var(--wave-bottom-color)" d="M1366 25v75.334V25zm-303.76 329H1366V100.334c-96.78-16.352-189.7-4.981-285.3 23.994l-83.061 29.033c-67.477 26.417-137.132 59.851-211.126 96.966C546.205 361.343 323.023 364.439 0 270.762V354h1062.24z"></path>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="var(--wave-top-color)" d="M1366 0H0v101.735c238.139 137.8 611.042 186.47 878.522 100.429 77.552-24.947 142.478-61.197 204.528-95.837C1173.42 55.869 1257.69 8.823 1366 5.077V33.948 0z"></path>
    <path fill="var(--wave-center-color)" d="M1366 108.113c-191.4-33.38-367.666 45.157-579.487 154.838C546.205 377.553 323.023 380.749 0 284.046V95.168c238.139 135.677 611.042 183.597 878.522 98.882C1069.03 133.708 1183.35 6.219 1366 0v108.113z"></path>
</svg>


<?php
include APPPATH . "/views/templates/footer.php";
?>