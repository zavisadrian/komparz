<?php include 'components/top.php';?>
<?php include 'navbar/menu.php';?>

<div class="wait-screen align-items-center justify-content-center flex-column" style="display: none;">
    <img src="../images/spinner.gif" alt="spinner">
    <h2 class="mt-4">Čakajte prosím...</h2>
</div>

<section id="profile" style="background-image: url(../images/komparz-banner.jpg);">
    <form action="PHP/addProfile.php" method="post" enctype="multipart/form-data" id="edit_acter">
        <div class="container py-7 pt-2 text-center">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6 mt-3 cropped-image">
                    <label class="mb-0 w-100">
                        <input type="file" name="p001" id="p001" data-section="main" data-unlock="img-container" data-cropimageid="p001" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                        <div class="cropped-image-overlay"></div>
                        <img id="cropped_p001" src="images/540x540.jpg" alt="" class="w-100 border-image">
                    </label>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h1>Registrácia<br>Modeling & Fotomodeling</h1>
                </div>
                <div class="col-lg-3 col-md-6"></div>
            </div>
        </div>
        <div class="container py-4">
            <div class="row pb-4">
                <div class="col-md-6 pr-md-4 registration-images">
                    <div class="img-container">
                        <div class="cropped-image main-image photos disabled">
                            <label class="mb-0 w-100">
                                <input disabled type="file" name="p011" id="p011" data-section="main" data-unlock="photos" data-cropimageid="p011" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                <div class="cropped-image-overlay"></div>
                                <img id="cropped_p011" src="images/540x540.jpg" alt="" class="w-100">
                            </label>
                        </div>
                        <div class="cropped-image main-image photobooks disabled" style="display: none;">
                            <label class="mb-0 w-100">
                                <input disabled type="file" name="p021" id="p021" data-section="main" data-unlock="photobooks" data-cropimageid="p021" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                <div class="cropped-image-overlay"></div>
                                <img id="cropped_p021" src="images/540x540.jpg" alt="" class="w-100">
                            </label>
                        </div>
                        <div class="cropped-image main-image polaroids disabled" style="display: none;">
                            <label class="mb-0 w-100">
                                <input disabled type="file" name="p031" id="p031" data-section="main" data-unlock="polaroids" data-cropimageid="p031" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                <div class="cropped-image-overlay"></div>
                                <img id="cropped_p031" src="images/540x540.jpg" alt="" class="w-100">
                            </label>
                        </div>
                    </div>
                    <div class="row profile-btns registration">
                        <div class="col-4 pr-0">
                            <a href="" class="btn w-100 btn-secondary btn-active" data-changetype="photos">fotografie</a>
                        </div>
                        <div class="col-4 px-0">
                            <a href="" class="btn w-100 btn-secondary" data-changetype="photobooks">fotobooky</a>
                        </div>
                        <div class="col-4 pl-0">
                            <a href="" class="btn w-100 btn-quaternary" data-changetype="polaroids">polaroidy</a>
                        </div>
                    </div>
                    <div class="row tabs photos">
                        <div class="col-md-3 col-6 order-1 order-md-1 pt-md-0 pt-3 px-1 pb-2 pb-md-0">
                            <div class="cropped-image mb-2 disabled">
                                <label class="mb-0 w-100">
                                    <input disabled type="file" name="p012" id="p012" data-section="main" data-unlock="p013" data-cropimageid="p012" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                    <div class="cropped-image-overlay"></div>
                                    <img id="cropped_p012" src="images/540x540.jpg" alt="" class="w-100">
                                </label>
                            </div>
                            <div class="cropped-image disabled">
                                <label class="mb-0 w-100">
                                    <input disabled type="file" name="p016" id="p016" data-section="main" data-unlock="p017" data-cropimageid="p016" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                    <div class="cropped-image-overlay"></div>
                                    <img id="cropped_p016" src="images/540x540.jpg" alt="" class="w-100">
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 order-3 order-md-2 px-1">
                            <div class="cropped-image mb-2 disabled">
                                <label class="mb-0 w-100">
                                    <input disabled type="file" name="p013" id="p013" data-section="main" data-unlock="p014" data-cropimageid="p013" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                    <div class="cropped-image-overlay"></div>
                                    <img id="cropped_p013" src="images/540x540.jpg" alt="" class="w-100">
                                </label>
                            </div>
                            <div class="cropped-image disabled">
                                <label class="mb-0 w-100">
                                    <input disabled type="file" name="p017" id="p017" data-section="main" data-unlock="p018" data-cropimageid="p017" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                    <div class="cropped-image-overlay"></div>
                                    <img id="cropped_p017" src="images/540x540.jpg" alt="" class="w-100">
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 order-2 order-md-3 pt-md-0 pt-3 px-1 pb-2 pb-md-0">
                            <div class="cropped-image mb-2 disabled">
                                <label class="mb-0 w-100">
                                    <input disabled type="file" name="p014" id="p014" data-section="main" data-unlock="p015" data-cropimageid="p014" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                    <div class="cropped-image-overlay"></div>
                                    <img id="cropped_p014" src="images/540x540.jpg" alt="" class="w-100">
                                </label>
                            </div>
                            <div class="cropped-image disabled">
                                <label class="mb-0 w-100">
                                    <input disabled type="file" name="p018" id="p018" data-section="main" data-unlock="p019" data-cropimageid="p018" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                    <div class="cropped-image-overlay"></div>
                                    <img id="cropped_p018" src="images/540x540.jpg" alt="" class="w-100">
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 order-4 order-md-4 px-1">
                            <div class="cropped-image mb-2 disabled">
                                <label class="mb-0 w-100">
                                    <input disabled type="file" name="p015" id="p015" data-section="main" data-unlock="p016" data-cropimageid="p015" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                    <div class="cropped-image-overlay"></div>
                                    <img id="cropped_p015" src="images/540x540.jpg" alt="" class="w-100">
                                </label>
                            </div>
                            <div class="cropped-image disabled">
                                <label class="mb-0 w-100">
                                    <input disabled type="file" name="p019" id="p019" data-section="main" data-unlock="p021" data-cropimageid="p019" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                    <div class="cropped-image-overlay"></div>
                                    <img id="cropped_p019" src="images/540x540.jpg" alt="" class="w-100">
                                </label>
                            </div>
                        </div>
                        <div class="col-12 form-group order-5 mt-3 px-1">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Pridať ďalšie fotofrafie do Fotografie</h6>
                            <div class="form-control form-control-user overflowHidden">
                                <input name="photos[]" type="file" class="cs-input-type-mf" multiple="" placeholder="Pridať ďalšie fotografie">
                                <div class="cs-input-type-f-erase" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters tabs photobooks" style="display: none">
                        <div class="col-12 form-group order-5 mt-3 px-1">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Pridať ďalšie fotofrafie do Fotobooky</h6>
                            <div class="form-control form-control-user overflowHidden">
                                <input name="photobooks[]" type="file" class="cs-input-type-mf" multiple="" placeholder="Pridať ďalšie fotografie">
                                <div class="cs-input-type-f-erase" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters tabs polaroids" style="display: none">
                        <div class="col-12 form-group order-5 mt-3 px-1">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Pridať ďalšie fotofrafie do Polaroidy</h6>
                            <div class="form-control form-control-user overflowHidden">
                                <input name="polaroids[]" type="file" class="cs-input-type-mf" multiple="" placeholder="Pridať ďalšie fotografie">
                                <div class="cs-input-type-f-erase" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" id="form">
                    <div class="">
                        <h3>Informácie o Komparzistovi / hercovi</h3>
                        <div class="row pt-4">
                            <div class="col-6">
                                <label for="name" class="mb-0 mt-3"><strong>Meno</strong> *</label>
                                <input type="text" class="registration-input" name="name" data-necessary="text"/>
                                <input type="hidden" class="registration-input" name="type" value="model"/>
                            </div>
                            <div class="col-6">
                                <label for="surname" class="mb-0 mt-3"><strong>Priezvisko</strong> *</label>
                                <input type="text" class="registration-input" name="surname" data-necessary="text"/>
                            </div>
                            <div class="col-6">
                                <label for="gender" class="mb-0 mt-3"><strong>Pohlavie</strong> *</label>
                                <select name="gender" id="gender" class="filter" data-placeholder="Pohlavie" data-necessary="text">
                                    <option value=""></option>
                                    <option value="Muž">Muž</option>
                                    <option value="Žena">Žena</option>
                                    <option value="Iné">Iné</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="email" class="mb-0 mt-3"><strong>E-mail</strong> *</label>
                                <input type="text" class="registration-input" id="email" name="mail" data-necessary="text"/>
                            </div>
                            <div class="col-6">
                                <label for="password" class="mb-0 mt-3"><strong>Heslo</strong> *</label>
                                <input id="pass1" type="password" class="registration-input" name="password" data-necessary="text"/>
                            </div>
                            <div class="col-6">
                                <label for="password_confirm" class="mb-0 mt-3"><strong>Potvrďte heslo</strong> *</label>
                                <input id="pass2" type="password" class="registration-input" name="password_confirm" data-necessary="text"/>
                            </div>
                            <div class="col-6">
                                <label for="phone" class="mb-0 mt-3"><strong>Telefón</strong> *</label>
                                <input type="text" class="registration-input" name="phone" data-necessary="text"/>
                            </div>
                            <div class="col-6">
                                <label for="street" class="mb-0 mt-3"><strong>Ulica</strong> *</label>
                                <input type="text" class="registration-input" name="street" data-necessary="text"/>
                            </div>
                            <div class="col-6">
                                <label for="city" class="mb-0 mt-3"><strong>Mesto</strong></label>
                                <input type="text" class="registration-input" name="city" data-necessary="text"/>
                            </div>
                            <div class="col-6">
                                <label for="region" class="mb-0 mt-3"><strong>Kraj</strong> *</label>
                                <select name="region" id="region" class="filter" data-placeholder="Kraj" data-necessary="text">
                                    <option value=""></option>
                                    <option value="Bratislavský">Bratislavský</option>
                                    <option value="Trnavský">Trnavský</option>
                                    <option value="Trenčianský">Trenčianský</option>
                                    <option value="Nitrianský">Nitrianský</option>
                                    <option value="Žilinský">Žilinský</option>
                                    <option value="Bánskobystrický">Bánskobystrický</option>
                                    <option value="Prešovský">Prešovský</option>
                                    <option value="Košický">Košický</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="zip_code" class="mb-0 mt-3"><strong>PSČ</strong> *</label>
                                <input type="text" class="registration-input" name="postcode" data-necessary="text"/>
                            </div>
                            <div class="col-6">
                                <label for="nationality" class="mb-0 mt-3"><strong>Národnosť</strong> *</label>
                                <select class="filter" data-placeholder="Národnosť" name="nationality" data-necessary="text">
                                    <option value=""></option>
                                    <option value="Slovenská">Slovenská</option>
                                    <option value="Česká">Česká</option>
                                    <option value="Polská">Polská</option>
                                    <option value="Maďarská">Maďarská</option>
                                    <option value="Iná">Iná</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="work_school" class="mb-0 mt-3"><strong>Zamestnanie / Škola</strong> *</label>
                                <input type="text" class="registration-input" name="work" data-necessary="text"/>
                            </div>
                            <div class="col-6">
                                <label for="date_of_birth" class="mb-0 mt-3"><strong>Dátum narodenia</strong> *</label>
                                <input name="date_of_birth" type="text" placeholder="Dátum narodenia" data-provide="datepicker" data-date-language="sk" data-necessary="text">
                            </div>
                            <div class="col-6">
                                <label for="height" class="mb-0 mt-3"><strong>Výška</strong> *</label>
                                <select name="height" id="height" class="filter " data-placeholder="od" data-necessary="text">
                                    <option value=""></option>
                                    <option value="140">140cm</option>
                                    <option value="145">145cm</option>
                                    <option value="150">150cm</option>
                                    <option value="155">155cm</option>
                                    <option value="160">160cm</option>
                                    <option value="165">165cm</option>
                                    <option value="170">170cm</option>
                                    <option value="175">175cm</option>
                                    <option value="180">180cm</option>
                                    <option value="185">185cm</option>
                                    <option value="190">190cm</option>
                                    <option value="195">195cm</option>
                                    <option value="200">200cm</option>
                                    <option value="205">205cm</option>
                                    <option value="210">210cm</option>
                                    <option value="215">215cm</option>
                                    <option value="220">220cm</option>
                                    <option value="225">225cm</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="confection" class="mb-0 mt-3"><strong>Konfekcia</strong> *</label>
                                <select name="confection" id="confection" class="filter " data-placeholder="Konfekcia" data-necessary="text">
                                    <option value=""></option>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                    <option value="XXXL">XXXL</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="foot_size" class="mb-0 mt-3"><strong>Číslo topánok</strong> *</label>
                                <select name="foot_size" id="foot_size" class="filter " data-placeholder="Číslo topánok" data-necessary="text">
                                    <option value=""></option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="brest_size" class="mb-0 mt-3"><strong>Miery prsia</strong> *</label>
                                <select name="brest_size" id="brest_size" class="filter " data-placeholder="Miery prsia" data-necessary="text">
                                    <option value=""></option>
                                    <option value="75">75</option>
                                    <option value="79">79</option>
                                    <option value="83">83</option>
                                    <option value="87">87</option>
                                    <option value="91">91</option>
                                    <option value="95">95</option>
                                    <option value="99">99</option>
                                    <option value="103">103</option>
                                    <option value="107">107</option>
                                    <option value="111">111</option>
                                    <option value="115">115</option>
                                    <option value="120">120</option>
                                    <option value="120">125</option>
                                    <option value="120">130</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="belt_size" class="mb-0 mt-3"><strong>Miery pás</strong> *</label>
                                <select name="belt_size" id="belt_size" class="filter " data-placeholder="Miery pás" data-necessary="text">
                                    <option value=""></option>
                                    <option value="51">51</option>
                                    <option value="56">56</option>
                                    <option value="60">60</option>
                                    <option value="63">63</option>
                                    <option value="67">67</option>
                                    <option value="71">71</option>
                                    <option value="75">75</option>
                                    <option value="79">79</option>
                                    <option value="83">83</option>
                                    <option value="87">87</option>
                                    <option value="91">91</option>
                                    <option value="95">95</option>
                                    <option value="99">99</option>
                                    <option value="103">103</option>
                                    <option value="107">107</option>
                                    <option value="111">110</option>
                                    <option value="111">115</option>
                                    <option value="111">120</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="bottom_size" class="mb-0 mt-3"><strong>Miery bok</strong> *</label>
                                <select name="bottom_size" id="bottom_size" class="filter " data-placeholder="Miery bok" data-necessary="text">
                                    <option value=""></option>
                                    <option value="75">75</option>
                                    <option value="79">79</option>
                                    <option value="83">83</option>
                                    <option value="87">87</option>
                                    <option value="91">91</option>
                                    <option value="95">95</option>
                                    <option value="99">99</option>
                                    <option value="103">103</option>
                                    <option value="107">107</option>
                                    <option value="111">111</option>
                                    <option value="115">115</option>
                                    <option value="120">119</option>
                                    <option value="120">125</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="eye_color" class="mb-0 mt-3"><strong>Farba očí</strong> *</label>
                                <select name="eyes" id="eye_color" class="filter" data-placeholder="Farba očí" data-necessary="text">
                                    <option value=""></option>
                                    <option value="modrá">Modrá</option>
                                    <option value="zelená">Zelená</option>
                                    <option value="hnedá">Hnedá</option>
                                    <option value="šedá">Šedá</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="hair_color" class="mb-0 mt-3"><strong>Farba vlasov</strong> *</label>
                                <select name="hair" id="hair_color" class="filter " data-placeholder="Farba vlasov" data-necessary="text">
                                    <option value=""></option>
                                    <option value="albín">Albín</option>
                                    <option value="blond">Blond</option>
                                    <option value="červená">Červená</option>
                                    <option value="čierna">Čierna</option>
                                    <option value="hnedá">Hnedá</option>
                                    <option value="hrdzavá">Hrdzavá</option>
                                    <option value="prešedivelá">Prešedivelá</option>
                                    <option value="svetlo hnedá">Svetlo hnedá</option>
                                    <option value="špinavý blond">Špinavý blond</option>
                                    <option value="šedivá">Šedivá</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label class="d-block mb-0 mt-3"><strong>Zaujímam sa o</strong></label>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="modeling" value="modeling, " name="in1">
                        <label class="custom-control-label " for="modeling">Modeling</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="fotomodeling" value="fotomodeling, " name="in2">
                        <label class="custom-control-label " for="fotomodeling">Fotomodeling</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hairmodeling" value="vlasový modeling, " name="in3">
                        <label class="custom-control-label " for="hairmodeling">Vlasový modeling</label>
                    </div>
                    <label class="d-block mb-0 mt-3"><strong>Zvláštne znamenia</strong></label>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="tatto" value="tetovanie, " name="ao1">
                        <label class="custom-control-label " for="tatto">Tetovanie</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="piercing" value="piercing, " name="ao2">
                        <label class="custom-control-label " for="piercing">Piercing</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="scar" value="jazva, " name="ao3">
                        <label class="custom-control-label " for="scar">Jazva</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="braces" value="strojček na zuby, " name="ao4">
                        <label class="custom-control-label " for="braces">Strojček na zuby</label>
                    </div>
                    <label class="d-block mb-0 mt-3"><strong>Umelecké schopnosti</strong></label>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="ballet" value="balet, " name="cr1">
                        <label class="custom-control-label " for="ballet">Balet</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="breakdance" value="breakdance, " name="cr2">
                        <label class="custom-control-label " for="breakdance">Breakdance</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="acting" value="herectvo, " name="cr3">
                        <label class="custom-control-label " for="acting">Herectvo</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="music_instrument" value="hra na hudobný nástroj, " name="cr4">
                        <label class="custom-control-label " for="music_instrument">Hra na hudobný nástroj</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="singing" value="spev, " name="cr5">
                        <label class="custom-control-label " for="singing">Spev</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="dancing_ballroom" value="spoločenský tanec, " name="cr6">
                        <label class="custom-control-label " for="dancing_ballroom">Spoločenský tanec</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="dancing_folk" value="ľudový tanec, " name="cr7">
                        <label class="custom-control-label " for="dancing_folk">Ľudový tanec</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="dancing_modern" value="moderný tanec, " name="cr8">
                        <label class="custom-control-label " for="dancing_modern">Moderný tanec</label>
                    </div>
                    <label class="d-block mb-0 mt-3"><strong>Jazykové znalosti</strong></label>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="english" name="l1" value="angličtina, ">
                        <label class="custom-control-label " for="english">Angličtina</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="czech" name="l2" value="čeština, ">
                        <label class="custom-control-label " for="czech">Čeština</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="france" name="l3" value="francúzština, ">
                        <label class="custom-control-label " for="france">Francúzština</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hungarian" name="l4" value="maďarčina, ">
                        <label class="custom-control-label " for="hungarian">Maďarčina</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="german" name="l5" value="nemčina, ">
                        <label class="custom-control-label " for="german">Nemčina</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="russian" name="l6" value="ruština, ">
                        <label class="custom-control-label " for="russian">Ruština</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="slovak" name="l7" value="slovenčina, ">
                        <label class="custom-control-label " for="slovak">Slovenčina</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="spain" name="l8" value="španielčina, ">
                        <label class="custom-control-label " for="spain">Španielčina</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="ital" name="l9" value="taliančina, ">
                        <label class="custom-control-label " for="ital">Taliančina</label>
                    </div>
                </div>
                <div class="col-6">
                    <label class="d-block mb-0 mt-3"><strong>Pohybové schopnosti</strong></label>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="basketball" name="mv1" value="basketball, ">
                        <label class="custom-control-label " for="basketball">Basketbal</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="bike" name="mv2" value="cyklistyka, ">
                        <label class="custom-control-label " for="bike">Cyklistyka</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="fitness" name="mv3" value="fitness, ">
                        <label class="custom-control-label " for="fitness">Fitness</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="footbal" name="mv4" value="futbal, ">
                        <label class="custom-control-label " for="footbal">Futbal</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="gymnastics" name="mv5" value="gymnastika, ">
                        <label class="custom-control-label " for="gymnastics">Gymnsatika</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="handball" name="mv6" value="hádzaná, ">
                        <label class="custom-control-label " for="handball">Hádzaná</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="horse_riding" name="mv7" value="jazda na koni, ">
                        <label class="custom-control-label " for="horse_riding">Jazda na koni</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="roller_skating" name="mv8" value="korčulovanie, ">
                        <label class="custom-control-label " for="roller_skating">Korčuľovanie</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="ski" name="mv9" value="lyžovanie, ">
                        <label class="custom-control-label " for="ski">Lyžovanie</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="swimming" name="mv10" value="plávanie, ">
                        <label class="custom-control-label " for="swimming">Plávanie</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="skate" name="mv11" value="skateboard, ">
                        <label class="custom-control-label " for="skate">Skateboard</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="snowboard" name="mv12" value="snowboard, ">
                        <label class="custom-control-label " for="snowboard">Snowboard</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="tennis" name="mv13" value="tennis, ">
                        <label class="custom-control-label " for="tennis">Tenis</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="water_sports" name="mv14" value="vodné športy, ">
                        <label class="custom-control-label " for="water_sports">Vodné športy</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="volleyball" name="mv15" value="volleyball, ">
                        <label class="custom-control-label " for="volleyball">Volejbal</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="workout" name="mv16" value="workout, ">
                        <label class="custom-control-label " for="workout">Workout</label>
                    </div>
                    <label class="d-block mb-0 mt-3"><strong>Informácie o mne</strong></label>
                    <textarea name="bio" id="about" rows="7" maxlength="255"></textarea>
                </div>
                <div class="col-md-12 text-center">
                    <p>
                        Súhlasím so spracovaním a so zverejnením osobných údajov na webovej stránke www.komparz.tv a oboznámil
                        som sa s podmienkami spracúvania osobných údajov. Podmienky nájdete <a href="privacy.php" target="_blank">tu</a>.
                    </p>
                </div>
                <div class="col-md-12 text-center">
                    <input type="checkbox" class="text-center" id="acceptation">
                </div>
                <div class="col-md-12 text-center">
                    <input type="hidden" id="croppedImages" name="croppedImages">
                    <input type="submit" class="btn btn-primary w-50 my-4" value="registovať sa" />
                </div>
            </div>
        </div>
    </form>
</section>

<div class="overlay-crop js">
	<div class="modal-crop" id="modal-crop">
		<div class="content">
			<div class="image_container">
				<img id="crop" src="#" alt="your image"/>
			</div>
			<button id="crop_button" class="btn btn-primary w-100">Crop</button>
		</div>
	</div>
</div>

<?php include 'components/footer.php';?>
<?php include 'components/bottom.php';?>
