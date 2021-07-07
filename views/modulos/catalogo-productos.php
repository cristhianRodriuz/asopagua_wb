<link rel="stylesheet" href="https://assets.jumpseller.com/store/verduleria-online/themes/290816/styles.css?1619244409" />
<link rel="stylesheet" href="https://assets.jumpseller.com/store/verduleria-online/themes/290816/color_pickers.css?1619244409" />
<link rel="stylesheet" href="https://assets.jumpseller.com/store/verduleria-online/themes/290816/linear-icon.css?1619244409" />
<style>
    .container-products {
        font-size: 0.8rem;
    }

    .like {
        font-size: 0.3rem !important;
    }
</style>

<body>
    <header class="header">
        <div class="preheader">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="preheader-message">
                            Estamos en facebook como: <a href="https://www.facebook.com/asopagua.asopagua.75" class="text-white" target="_blank"><b>@Asopagua</b></a> ¡Síguenos!
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-lg-none text-center mb-3">
                        <a href="/" title="Asopagua" class="navbar-brand">
                            <img src="<?php echo URL . VW ?>assets/images/ASOPAGUA.png" class="store-image" alt="Asopagua" />
                        </a>
                    </div>
                    <div class="col-2 d-lg-none">
                        <button class="btn primary mobile-menu-trigger">
                            <div class="nav-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 d-none d-lg-block">
                        <a href="" title="Despacho Pistacho" class="navbar-brand">
                            <!-- <img src="bg_small.png" class="store-image" style="max-width: 50%;" alt="Despacho Pistacho" /> -->
                            <span class="logo_text">Logo pendiente</span>
                        </a>
                    </div>
                    <div class="col-lg-4 col-8">
                        <form id="search_mini_form" class="form-group" method="get" action="/search">
                            <input type="text" value="" name="q" class="form-control form-control-sm" onFocus="javascript:this.value=''" placeholder="Buscar productos" />
                            <button type="submit" class="btn primary"><i class="linear-icon icon-0803-magnifier"></i></button>
                        </form>
                    </div>
                    <div class="col-lg-4 col-2 text-right">
                        <div class="header-cart">
                            <span class="cart-size">0</span>
                            <a id="cart-link" href="<?php URL . VW ?>cart" class="btn secondary">
                                <i class="linear-icon icon-0333-bag2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-area">
            <nav id="mobile-menu" aria-labelledby="menu-trigger" class="trsn d-lg-none">
                <ul>
                    <li class=" mobile">
                        <a href="/inicio" title="inicio">Inicio</a>
                    </li>
                    <li class=" mobile">
                        <a href="/nosotros" title="nosotros">Nosotros</a>
                    </li>
                    <li class=" mobile">
                        <a href="catalogo-productos" title="productos">Productos</a>
                    </li>
                    <li class=" mobile">
                        <a href="/contacto" title="contacto">Contacto</a>
                    </li>
                </ul>
            </nav>
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="navbar navbar-expand-lg">
                            <div id="main-menu" class="collapse navbar-collapse">
                                <ul class="navbar-nav mr-auto list-group-horizontal d-table">
                                    <li class="nav-item d-table-cell">
                                        <a href="/" title="inicio" class=" trsn nav-link d-table-cell align-middle">Inicio</a>
                                    </li>
                                    <li class="nav-item d-table-cell">
                                        <a href="/nosotros" title="nosotros" class=" trsn nav-link d-table-cell align-middle">Nosotros</a>
                                    </li>
                                    <li class="nav-item d-table-cell">
                                        <a href="catalogo-productos" title="productos" class=" trsn nav-link d-table-cell align-middle">Productos</a>
                                    </li>
                                    <li class="nav-item d-table-cell">
                                        <a href="/noticias" title="Noticias" class=" trsn nav-link d-table-cell align-middle">Noticias</a>
                                    </li>
                                    <li class="nav-item d-table-cell">
                                        <a href="/contacto" title="Contacto" class=" trsn nav-link d-table-cell align-middle">Contacto</a>
                                    </li>
                                </ul>
                                <ul class="social navbar-toggler-right list-inline d-none d-xl-block">
                                    <li class="list-inline-item">
                                        <a href="" class="trsn" title="Ir a Facebook" target="_blank">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="trsn" title="Ir a Instagram" target="_blank">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="trsn" title="WhatsApp" target="_blank">
                                            <i class="fab fa-whatsapp fa-fw"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container container-main container-products">
        <div class="row mb-3" id="cards-leches">
            <div class="col-12">
                <h2 class="block-header">Leches</h2>
            </div>
        </div>
        <div class="row mb-3" id="cards-yogurt">
            <div class="col-12">
                <h2 class="block-header">Yogurt</h2>
            </div>
        </div>
        <div class="row mb-3" id="cards-quesos">
            <div class="col-12">
                <h2 class="block-header">Quesos</h2>
            </div>
        </div>
        <template id="products-template">
            <div class="col-md-4">
                <div class="card">
                    <div class="text-center">
                        <img class="img-thumbnail img-product" src="<?php echo URL; ?>uploads/productos/mora_yogourt.jpg" alt="Vans">
                    </div>
                    <div class="card-body text-center">
                        <h4 class="card-title">Yogurt de Mora</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Yogurt 2LT</h6>
                        <div class="card-text">
                            <p>
                                <strong class="d_mayor"></strong>
                                <span class="price-mayor">
                                    $ 2.30
                                </span>
                            </p>
                            <p>
                                <strong class="d_menor"></strong>
                                <span class="price-menor">
                                    $ 2.40
                                </span>
                            </p>
                            <p>
                                <strong class="d_publico"></strong>
                                <span class="price-publico">
                                    $ 2.60
                                </span>
                            </p>
                        </div>
                        <div class="form-group row align-items-center">
                            <!-- <div class="quantity-button quantity-up">+</div> -->
                            <div class="col-md-3 text-center">
                                <span type="button">
                                    <i class="fas fa-arrow-down"></i>
                                </span>
                            </div>
                            <div class="col-6">
                                <input type="number" min="1" class="form-control text-center inputQty" value="1" disabled>
                            </div>
                            <div class="col-md-3 text-center">
                                <span type="button">
                                    <i class="fas fa-arrow-up"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="#" class="btn btn-danger mt-3 btnAddCart"><i class="fas fa-shopping-cart"></i> Agregar al carrito</a>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </div>
    <script>
        $(document).ready(function() {
            function addCart(codigo, nombre, p_mayorista, d_mayorista, p_minorista, d_minorista, p_publico) {
                console.log(codigo, nombre);
            }
            const cardLeche = document.getElementById('cards-leches');
            const cardYogurt = document.getElementById('cards-yogurt');
            const cardQueso = document.getElementById('cards-quesos');
            const templateProduct = document.getElementById('products-template').content;
            const fragmentLeche = document.createDocumentFragment();
            const fragmentYogurt = document.createDocumentFragment();
            const fragmentQueso = document.createDocumentFragment();
            $.ajax({
                type: "POST",
                url: "ajax/productos.php",
                data: {
                    "getProductosAll": ""
                },
                success: function(response) {
                    let jsoParse = JSON.parse(response);
                    console.log(jsoParse);
                    let leches = jsoParse.filter(element => element.categoria == "Leche Cruda");
                    let yogures = jsoParse.filter(element => element.categoria == "Yogurt");
                    let quesos = jsoParse.filter(element => element.categoria == "Quesos");

                    leches.forEach(element => {
                        templateProduct.querySelector('.card-title').textContent = element.nombre;
                        templateProduct.querySelector('.card-subtitle').textContent = element.descripcion;
                        templateProduct.querySelector('.d_mayor').textContent = element.d_precio_mayorista + " : ";
                        templateProduct.querySelector('.price-mayor').textContent = '$ ' + element.precio_mayorista;
                        if (element.d_precio_minorista == '') {
                            templateProduct.querySelector('.d_menor').textContent = "Al por menor" + " : ";
                            templateProduct.querySelector('.price-menor').textContent = '$ ' + element.precio_publico;
                        } else {
                            templateProduct.querySelector('.d_menor').textContent = element.d_precio_minorista + " : ";
                            templateProduct.querySelector('.price-menor').textContent = '$ ' + element.precio_minorista;
                        }
                        templateProduct.querySelector('.d_publico').textContent = "Precio normal: ";
                        templateProduct.querySelector('.price-publico').textContent = '$ ' + element.precio_publico;
                        templateProduct.querySelector('.btnAddCart').setAttribute('onclick', `addCart(${element.codigo},'${element.nombre} - ${element.descripcion}',${element.precio_mayorista}, '${element.d_precio_mayorista}',${element.precio_minorista},'${element.d_precio_minorista}','${element.precio_publico}')`);
                        const clone = templateProduct.cloneNode(true);
                        fragmentLeche.appendChild(clone);
                    });
                    cardLeche.appendChild(fragmentLeche);

                    yogures.forEach(element => {
                        templateProduct.querySelector('.card-title').textContent = element.nombre;
                        templateProduct.querySelector('.card-subtitle').textContent = element.descripcion;
                        templateProduct.querySelector('.d_mayor').textContent = element.d_precio_mayorista + " : ";
                        templateProduct.querySelector('.price-mayor').textContent = '$ ' + element.precio_mayorista;
                        if (element.d_precio_minorista == '') {
                            templateProduct.querySelector('.d_menor').textContent = "Al por menor" + " : ";
                            templateProduct.querySelector('.price-menor').textContent = '$ ' + element.precio_publico;
                        } else {
                            templateProduct.querySelector('.d_menor').textContent = element.d_precio_minorista;
                            templateProduct.querySelector('.price-menor').textContent = '$ ' + element.precio_minorista;
                        }
                        templateProduct.querySelector('.d_publico').textContent = "Precio normal: ";
                        templateProduct.querySelector('.price-publico').textContent = '$ ' + element.precio_publico;
                        const clone = templateProduct.cloneNode(true);

                        fragmentYogurt.appendChild(clone);
                    });
                    cardYogurt.appendChild(fragmentYogurt);

                    quesos.forEach(element => {
                        templateProduct.querySelector('.card-title').textContent = element.nombre;
                        templateProduct.querySelector('.card-subtitle').textContent = element.descripcion;
                        templateProduct.querySelector('.d_mayor').textContent = element.d_precio_mayorista + " : ";
                        templateProduct.querySelector('.price-mayor').textContent = '$ ' + element.precio_mayorista;
                        if (element.d_precio_minorista == '') {
                            templateProduct.querySelector('.d_menor').textContent = "Al por menor" + " : ";
                            templateProduct.querySelector('.price-menor').textContent = '$ ' + element.precio_publico;
                        } else {
                            templateProduct.querySelector('.d_menor').textContent = element.d_precio_minorista;
                            templateProduct.querySelector('.price-menor').textContent = '$ ' + element.precio_minorista;
                        }
                        templateProduct.querySelector('.d_publico').textContent = "Precio normal: ";
                        templateProduct.querySelector('.price-publico').textContent = '$ ' + element.precio_publico;

                        const clone = templateProduct.cloneNode(true);

                        fragmentQueso.appendChild(clone);
                    });
                    cardQueso.appendChild(fragmentQueso);
                    // jsoParse.forEach(element => {
                    //     templateProduct.querySelector('.card-title').textContent = element.nombre;
                    //    const clone = templateProduct.cloneNode(true);

                    //    fragment.appendChild(clone);
                    // });
                    // cardLeche.appendChild(fragment);
                }


            })
        })
    </script>