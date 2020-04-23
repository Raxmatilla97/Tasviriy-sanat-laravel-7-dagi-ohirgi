@extends('artuz.layouts.makets.front.sayt')

@section('gallereya')
       
<div class="portfolio-list-inner isotope-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css') }}" -->
					
    <!-- Begin isotope
    ===================
    * Use class "gutter-1", "gutter-2", "gutter-3", "gutter-4", "gutter-5" or "gutter-6" to add more space between items.
    * Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
    -->
    <div class="isotope col-4 gutter-3">
        
        <!-- Begin isotope top content -->
        <div class="isotope-top-content">

            <!-- Begin isotope categories (if you don't want to use a isotope filter then you can use the category list instead to present portfolio categories on separate pages. Just uncomment if needed. Note: do not forget to remove isotope filter code!).
            ================================= 
            * Add class "active" to <li> if you need active link on current page.
            * Use class "iso-cat-center" or "iso-cat-right" to align category list.
            -->
            <!-- <div class="isotope-categories-wrap">
                <ul class="isotope-categories">
                    <li class="icl-title"><span>Categories: </span></li>
                    <li class="active"><a href="">Branding</a></li>
                    <li><a href="">Print</a></li>
                    <li><a href="">Digital</a></li>
                    <li><a href="">Motion</a></li>
                </ul>
            </div> -->
            <!-- End isotope categories -->


            <!-- Begin isotope filter
            ==========================
            * Use class "fi-btn" to enable filter button (default style).
            * Use class "fi-center" or "fi-right" to align filter ("fi-center"= no effect on "fi-btn").
            * Use class "fi-btn-dark" to enable filter button dark style (class "fi-btn" is required!).
            * Use class "fi-btn-light" to enable filter button light style (class "fi-btn" is required!).
            * Use class "fi-btn-tansparent-dark" to enable filter button transparent dark style (class "fi-btn" is required! No effect on smaller screens!).
            * Use class "fi-btn-tansparent-light" to enable filter button transparent light style (class "fi-btn" is required! No effect on smaller screens!).
            * Use class "fi-btn-dropdown-dark" to enable filter button dropdown dark style (class "fi-btn" is required!).
            * Use class "fi-btn-dropdown-light" to enable filter button dropdown light style (class "fi-btn" is required!).
            -->
            <div class="isotope-filter fi-btn fi-right fi-btn-dropdown-dark">
                <div class="isotope-filter-button">
                    <span class="ifb-icon"><span class="lnr lnr-funnel"></span></span>
                    <span class="ifb-icon-close"><i class="fas fa-times"></i></span> <!-- effect on small screens!) -->

                    <!-- Begin filter button text
                    ==============================
                    * Use class "hide-from-xs" to disable button text on small screens.
                    * Use class "hide" to disable button text permanently.
                    -->
                    <span class="ifb-text">Filter</span>
                    <!-- End filter button text -->

                </div> <!-- /.isotope-filter-button -->

                <!-- Begin isotope filter links -->
                <ul class="isotope-filter-links">
                    <li class="ifl-title"><span>Filter: </span></li>
                    <li><button class="active" data-filter="*">Show All</button></li>
                    <li><button data-filter=".branding">Branding</button></li>
                    <li><button data-filter=".print">Print</button></li>
                    <li><button data-filter=".digital">Digital</button></li>
                    <li><button data-filter=".motion">Motion</button></li>
                </ul>
                <!-- End isotope filter links -->
            </div>
            <!-- End isotope filter -->

        </div>
        <!-- End isotope top content -->

        <!-- Begin isotope items wrap 
        ==============================
        * Use class "pli-alter-1", "pli-alter-2", "pli-alter-3", "pli-alter-4" or "pli-alter-5" to change portfolio list item style. Note: style "pli-alter-4" is no effect on small screens (for better user experience)!
        * Use class "pli-dark" to enable dark hover overlay (effect only with default hover overlay and "pli-alter-4", "pli-alter-5" classes!).
        * Use class "pli-colored" or "pli-multi-colored" to enable colored hover overlay (effect only with default hover overlay and "pli-alter-4", "pli-alter-5" classes!).
        * Use class "pli-frame" to enable image frames.
        -->
        <div style="position: relative; height: 888.683px;" class="isotope-items-wrap pli-dark pli-alter-4">

            <!-- Grid sizer (do not remove!!!) -->
            <div class="grid-sizer"></div>


            <!-- ===================== 
            /// Begin isotope item ///
            ========================== 
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
            <div style="position: absolute; left: 0px; top: 0px;" class="isotope-item digital">

                <!-- Begin portfolio list item -->
                <div class="portfolio-list-item">

                    <!-- Begin portfolio list item image -->
                    <div class="pl-item-image-wrap">

                        <!-- Begin portfolio list item image inner -->
                        <a href="portfolio-single-1.html" class="pl-item-image-inner">
                            <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-1.jpg') }}" alt="image">
                            
                            <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                            <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                        </a>
                        <!-- End portfolio list item image inner -->

                    </div>
                    <!-- End portfolio list item image -->
                    
                    <!-- Begin portfolio list item info -->
                    <div class="pl-item-info">
                        <div class="pl-item-caption">
                            <h2 class="pl-item-title"><a href="portfolio-single-1.html">Elper Nomadis</a></h2>
                            <div class="pl-item-category"><a href="portfolio-archive.html">Digital</a></div>
                        </div>
                    </div>
                    <!-- End portfolio list item info -->

                </div>
                <!-- End portfolio list item -->

            </div>
            <!-- End isotope item -->

            <!-- ===================== 
            /// Begin isotope item ///
            ========================== 
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
            <div style="position: absolute; left: 328.4px; top: 0px;" class="isotope-item print">

                <!-- Begin portfolio list item -->
                <div class="portfolio-list-item">

                    <!-- Begin portfolio list item image -->
                    <div class="pl-item-image-wrap">

                        <!-- Begin portfolio list item image inner -->
                        <a href="portfolio-single-2.html" class="pl-item-image-inner">
                            <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-16.jpg') }}" alt="image">
                            
                            <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                            <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                        </a>
                        <!-- End portfolio list item image inner -->

                    </div>
                    <!-- End portfolio list item image -->
                    
                    <!-- Begin portfolio list item info -->
                    <div class="pl-item-info">
                        <div class="pl-item-caption">
                            <h2 class="pl-item-title"><a href="portfolio-single-2.html">Futter Samantis</a></h2>
                            <div class="pl-item-category"><a href="portfolio-archive.html">Print</a></div>
                        </div>
                    </div>
                    <!-- End portfolio list item info -->

                </div>
                <!-- End portfolio list item -->

            </div>
            <!-- End isotope item -->

            <!-- ===================== 
            /// Begin isotope item ///
            ========================== 
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
            <div style="position: absolute; left: 656.8px; top: 0px;" class="isotope-item branding">

                <!-- Begin portfolio list item -->
                <div class="portfolio-list-item">

                    <!-- Begin portfolio list item image -->
                    <div class="pl-item-image-wrap">

                        <!-- Begin portfolio list item image inner -->
                        <a href="portfolio-single-3.html" class="pl-item-image-inner">
                            <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-3.jpg') }}" alt="image">
                            
                            <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                            <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                        </a>
                        <!-- End portfolio list item image inner -->

                    </div>
                    <!-- End portfolio list item image -->
                    
                    <!-- Begin portfolio list item info -->
                    <div class="pl-item-info">
                        <div class="pl-item-caption">
                            <h2 class="pl-item-title"><a href="portfolio-single-3.html">Tartumi Sandera Naomis</a></h2>
                            <div class="pl-item-category"><a href="portfolio-archive.html">Branding</a></div>
                        </div>
                    </div>
                    <!-- End portfolio list item info -->

                </div>
                <!-- End portfolio list item -->

            </div>
            <!-- End isotope item -->

            <!-- ===================== 
            /// Begin isotope item ///
            ========================== 
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
            <div style="position: absolute; left: 985.2px; top: 0px;" class="isotope-item digital">

                <!-- Begin portfolio list item -->
                <div class="portfolio-list-item">

                    <!-- Begin portfolio list item image -->
                    <div class="pl-item-image-wrap">

                        <!-- Begin portfolio list item image inner -->
                        <a href="portfolio-single-4.html" class="pl-item-image-inner">
                            <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-4.jpg') }}" alt="image">
                            
                            <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                            <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                        </a>
                        <!-- End portfolio list item image inner -->
                        
                    </div>
                    <!-- End portfolio list item image -->
                    
                    <!-- Begin portfolio list item info -->
                    <div class="pl-item-info">
                        <div class="pl-item-caption">
                            <h2 class="pl-item-title"><a href="portfolio-single-4.html">Tetera Laktus</a></h2>
                            <div class="pl-item-category"><a href="portfolio-archive.html">Digital</a></div>
                        </div>
                    </div>
                    <!-- End portfolio list item info -->

                </div>
                <!-- End portfolio list item -->

            </div>
            <!-- End isotope item -->

            <!-- ===================== 
            /// Begin isotope item ///
            ========================== 
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
            <div style="position: absolute; left: 656.8px; top: 199.083px;" class="isotope-item motion">

                <!-- Begin portfolio list item -->
                <div class="portfolio-list-item">

                    <!-- Begin portfolio list item image -->
                    <div class="pl-item-image-wrap">

                        <!-- Begin portfolio list item image inner -->
                        <a href="portfolio-single-5.html" class="pl-item-image-inner">
                            <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-5.jpg') }}" alt="image">
                            
                            <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                            <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                        </a>
                        <!-- End portfolio list item image inner -->

                    </div>
                    <!-- End portfolio list item image -->
                    
                    <!-- Begin portfolio list item info -->
                    <div class="pl-item-info">
                        <div class="pl-item-caption">
                            <h2 class="pl-item-title"><a href="portfolio-single-5.html">Tant Saktra Memis</a></h2>
                            <div class="pl-item-category"><a href="portfolio-archive.html">Motion</a></div>
                        </div>
                    </div>
                    <!-- End portfolio list item info -->

                </div>
                <!-- End portfolio list item -->

            </div>
            <!-- End isotope item -->

            <!-- ===================== 
            /// Begin isotope item ///
            ========================== 
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
            <div style="position: absolute; left: 985.2px; top: 199.083px;" class="isotope-item branding digital">

                <!-- Begin portfolio list item -->
                <div class="portfolio-list-item">

                    <!-- Begin portfolio list item image -->
                    <div class="pl-item-image-wrap">

                        <!-- Begin portfolio list item image inner -->
                        <a href="portfolio-single-6.html" class="pl-item-image-inner">
                            <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-17.jpg') }}" alt="image">
                            
                            <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                            <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                        </a>
                        <!-- End portfolio list item image inner -->

                    </div>
                    <!-- End portfolio list item image -->
                    
                    <!-- Begin portfolio list item info -->
                    <div class="pl-item-info">
                        <div class="pl-item-caption">
                            <h2 class="pl-item-title"><a href="portfolio-single-6.html">Intuisa Jacobis Untra</a></h2>
                            <div class="pl-item-category"><a href="portfolio-archive.html">Branding</a>, <a href="portfolio-grid-no-crop.html">Digital</a></div>
                        </div>
                    </div>
                    <!-- End portfolio list item info -->

                </div>
                <!-- End portfolio list item -->

            </div>
            <!-- End isotope item -->

            <!-- ===================== 
            /// Begin isotope item ///
            ========================== 
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
            <div style="position: absolute; left: 0px; top: 217.55px;" class="isotope-item digital">

                <!-- Begin portfolio list item -->
                <div class="portfolio-list-item">

                    <!-- Begin portfolio list item image -->
                    <div class="pl-item-image-wrap">

                        <!-- Begin portfolio list item image inner -->
                        <a href="portfolio-single-7.html" class="pl-item-image-inner">
                            <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-19.gif') }}" alt="image">
                            
                            <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                            <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                        </a>
                        <!-- End portfolio list item image inner -->

                    </div>
                    <!-- End portfolio list item image -->
                    
                    <!-- Begin portfolio list item info -->
                    <div class="pl-item-info">
                        <div class="pl-item-caption">
                            <h2 class="pl-item-title"><a href="portfolio-single-7.html">Marevik Trastis</a></h2>
                            <div class="pl-item-category"><a href="portfolio-archive.html">Digital</a></div>
                        </div>
                    </div>
                    <!-- End portfolio list item info -->

                </div>
                <!-- End portfolio list item -->

            </div>
            <!-- End isotope item -->

            <!-- ===================== 
            /// Begin isotope item ///
            ========================== 
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
            <div style="position: absolute; left: 656.8px; top: 416.633px;" class="isotope-item branding">

                <!-- Begin portfolio list item -->
                <div class="portfolio-list-item">

                    <!-- Begin portfolio list item image -->
                    <div class="pl-item-image-wrap">

                        <!-- Begin portfolio list item image inner -->
                        <a href="portfolio-single-8.html" class="pl-item-image-inner">
                            <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-20.gif') }}" alt="image">
                            
                            <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                            <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                        </a>
                        <!-- End portfolio list item image inner -->

                    </div>
                    <!-- End portfolio list item image -->
                    
                    <!-- Begin portfolio list item info -->
                    <div class="pl-item-info">
                        <div class="pl-item-caption">
                            <h2 class="pl-item-title"><a href="portfolio-single-8.html">Kampur &amp; Brena</a></h2>
                            <div class="pl-item-category"><a href="portfolio-archive.html">Branding</a></div>
                        </div>
                    </div>
                    <!-- End portfolio list item info -->

                </div>
                <!-- End portfolio list item -->

            </div>
            <!-- End isotope item -->

            <!-- ===================== 
            /// Begin isotope item ///
            ========================== 
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
            <div style="position: absolute; left: 328.4px; top: 439.233px;" class="isotope-item print">

                <!-- Begin portfolio list item -->
                <div class="portfolio-list-item">

                    <!-- Begin portfolio list item image -->
                    <div class="pl-item-image-wrap">

                        <!-- Begin portfolio list item image inner -->
                        <a href="portfolio-single-9.html" class="pl-item-image-inner">
                            <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-18.jpg') }}" alt="image">
                            
                            <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                            <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                        </a>
                        <!-- End portfolio list item image inner -->

                    </div>
                    <!-- End portfolio list item image -->
                    
                    <!-- Begin portfolio list item info -->
                    <div class="pl-item-info">
                        <div class="pl-item-caption">
                            <h2 class="pl-item-title"><a href="portfolio-single-9.html">Ekona Rufu Tatemi Antem</a></h2>
                            <div class="pl-item-category"><a href="portfolio-archive.html">Print</a></div>
                        </div>
                    </div>
                    <!-- End portfolio list item info -->

                </div>
                <!-- End portfolio list item -->

            </div>
            <!-- End isotope item -->

            <!-- ===================== 
            /// Begin isotope item ///
            ========================== 
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
            <div style="position: absolute; left: 0px; top: 472.05px;" class="isotope-item digital">

                <!-- Begin portfolio list item -->
                <div class="portfolio-list-item">

                    <!-- Begin portfolio list item image -->
                    <div class="pl-item-image-wrap">

                        <!-- Begin portfolio list item image inner -->
                        <a href="portfolio-single-1.html" class="pl-item-image-inner">
                            <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-10.jpg') }}" alt="image">
                            
                            <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                            <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                        </a>
                        <!-- End portfolio list item image inner -->

                    </div>
                    <!-- End portfolio list item image -->
                    
                    <!-- Begin portfolio list item info -->
                    <div class="pl-item-info">
                        <div class="pl-item-caption">
                            <h2 class="pl-item-title"><a href="portfolio-single-1.html">Kakteil Nurk Um Akso</a></h2>
                            <div class="pl-item-category"><a href="portfolio-archive.html">Digital</a></div>
                        </div>
                    </div>
                    <!-- End portfolio list item info -->

                </div>
                <!-- End portfolio list item -->

            </div>
            <!-- End isotope item -->

            
                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 985.2px; top: 638.316px;" class="isotope-item branding motion">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-2.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-11.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-2.html">Gravitek Fucena Ekrem</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Branding</a>, <a href="portfolio-grid-no-crop.html">Motion</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 0px; top: 671.133px;" class="isotope-item digital branding">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-3.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-12.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-3.html">Lehitsesa Linnas</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Digital</a>, <a href="portfolio-grid-no-crop.html">Branding</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- ===================== 
                        /// Begin isotope item ///
                        ========================== 
                        * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
                        -->
                        <div style="position: absolute; left: 656.8px; top: 671.133px;" class="isotope-item digital branding">

                            <!-- Begin portfolio list item -->
                            <div class="portfolio-list-item">

                                <!-- Begin portfolio list item image -->
                                <div class="pl-item-image-wrap">

                                    <!-- Begin portfolio list item image inner -->
                                    <a href="portfolio-single-4.html" class="pl-item-image-inner">
                                        <img src="{{ ('front/assets/img/portfolio/list/list-2/portfolio-list-15.jpg') }}" alt="image">
                                        
                                        <!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
                                        <div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
                                    </a>
                                    <!-- End portfolio list item image inner -->

                                </div>
                                <!-- End portfolio list item image -->
                                
                                <!-- Begin portfolio list item info -->
                                <div class="pl-item-info">
                                    <div class="pl-item-caption">
                                        <h2 class="pl-item-title"><a href="portfolio-single-4.html">Watres Boletum</a></h2>
                                        <div class="pl-item-category"><a href="portfolio-archive.html">Digital</a></div>
                                    </div>
                                </div>
                                <!-- End portfolio list item info -->

                            </div>
                            <!-- End portfolio list item -->

                        </div>
                        <!-- End isotope item -->

                    </div>
                    <!-- End isotope items wrap -->

                    


                    <!-- Begin tt-pagination 
                    ========================= 
                    * Use class "tt-pagin-center" or "tt-pagin-right" to align pagination 
                    * Use class "tt-pagin-rounded" to enable pagination rounded style -->
                    <div class="tt-pagination-wrap tt-pagin-center">
                        <ul class="tt-pagination">
                           
                            <li class="active"><a href="portfolio-grid-no-crop.html#0">Barcha suratlarni ko'rish.</a></li>
                           
                        </ul>

                       
                    </div>
                    <!-- End tt-pagination -->

                    <!-- Begin isotope pagination (Note: "Load More" button is for design purposes only!)
                    ============================== -->
                    <!-- <div class="iso-load-more-wrap">
                        <div class="iso-load-more">
                            <button class="iso-load-more-button">Load More</button>
                        </div>
                    </div> -->
                    <!-- End isotope pagination -->
<hr>
                </div>
                <!-- End isotope -->

            </div> <!-- /.portfolio-list-inner (/.isotope-wrap) -->
@endsection