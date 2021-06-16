<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Sun Jun 13 2021 05:59:08 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="608dfbd9297f8d98aab29148" data-wf-site="59de7f3f07bb6700016482bc" lang="en">
<head>
    <meta charset="utf-8">
    <title>Donorport | Home</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/webflow.css" rel="stylesheet" type="text/css">
    <link href="css/boonbay.webflow.css" rel="stylesheet" type="text/css">
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="images/webclip.png" rel="apple-touch-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script defer="" type="text/javascript" src="https://cdn.statically.io/gh/malchata/yall.js/main/dist/yall.min.js"></script>
    <style>
        body {
            --avatar: #fff;
            --bg-transparent: hsl(0deg 0% 100% / 75%);
            --bkg-activity: #fff;
            --bkg-alt: #fafafa;
            --bkg-attention: #fffbdf;
            --bkg-checkout: #fafafa;
            --bkg-color: #fff;
            --bkg-dark: #e6e7e8;
            --bkg-disabled: #ffffff;
            --bkg-icon: #fafafa;
            --bkg-ios-dark: #efefef;
            --bkg-ios: #efefef;
            --bkg-item: #fbfdff;
            --bkg-item-mid: #fbfdff;
            --bkg--list: #393e50;
            --bkg-opacity: #fafafa70;
            --bkg-overlay: rgb(255 255 255 / 75%);
            --bkg-post: #fff;
            --bkg-qty: rgba(111, 111, 144, 0.85);
            --bkg-select: #fafafa;
            --bkg-shade: #f8fafd;
            --bkg-snap: #fafafa;
            --bkg-studio: #f8fafd;
            --bkg-unset: #fafafa;
            --bkg-unsetimg: #e5f4ff;
            --border-activate: #d6d6d6;
            --border-studio: #ededed;
            --border-unset: #fafafa;
            --border: #f5f5f5;
            --bright-soft: brightness(1);
            --btn-light: #4aabf0;
            --btn-blue: #3898ec;
            --color-primary-light: #152640;
            --color-primary: #fff;
            --color-secondary: #eec413;
            --content-editable: rgba(217, 245, 255,0.5);
            --feed-icon: #eef2f8;
            --opacity-alt: 1;
            --opacity-img: brightness(1) contrast(1);
            --opacity: 1;
            --placeholder: #00000021;
            --price: #45bb82;
            --shadow-avatar: #bbb;
            --shadow-swal: rgb(60 64 67 / 8%) 6px 8px 20px 1px;
            --studio: #f8fafd;
            --tab-active: #4aabf0;
            --text-off: #6f6f90;
            --text-soft: #6f6f908c;
            --text-subtext: #6f6f90ad;
            --text-title: #68688a;
            --text-toggle: #6f6f904f;
            --text-toggle_active: #6f6f90;
            --tooltip: #544b4b;
            --xp-tag: #4eb1f7;
        }
        body.dark-theme {
            --avatar: #2d3848;
            --bg-transparent: hsl(216deg 23% 23% / 75%);
            --bkg-activity: #2d3848;
            --bkg-alt: #404a5f;
            --bkg-attention: #ab3f3f;
            --bkg-checkout: #404a5fb8;
            --bkg-color: #2d3848;
            --bkg-dark: #495a73;
            --bkg-disabled: #2d3848;
            --bkg-icon: #2d3848;
            --bkg-ios-dark: #2d3848;
            --bkg-ios: #404a5f;
            --bkg-item: #393e50;
            --bkg-item-mid: #3c4356;
            --bkg--list: #393e50;
            --bkg-opacity: #40485fcc;
            --bkg-overlay: rgb(45 45 45 / 75%);
            --bkg-post: #40495f;
            --bkg-qty: #6f788c;
            --bkg-select: #40495f;
            --bkg-shade: #40495f;
            --bkg-snap: #2d3848;
            --bkg-studio: #2d3848;
            --bkg-unset: unset;
            --bkg-unsetimg: unset;
            --border-activate: #fafafa7a;
            --border-studio: #ffffff00;
            --border-unset: #ffffff00;
            --border: #fafafa0f;
            --bright-soft: brightness(.94);
            --btn-light: #8b94a7;
            --btn-blue: #40495f;
            --color-primary-light: #152640;
            --color-primary: #2d3848;
            --color-secondary: #e684af;
            --content-editable: #40495f;
            --feed-icon: #2d3848;
            --opacity-alt: .95;
            --opacity-img: brightness(0.85) contrast(1.2);
            --opacity: 0.5;
            --placeholder: #96aabb;
            --price: #48e096;
            --shadow-avatar: #40495f;
            --shadow-swal: rgb(0 0 0 / 8%) 6px 8px 20px 1px;
            --studio: #2d3848;
            --tab-active: #fcfcfce8;
            --text-off: #7d8e9bff;
            --text-soft: #868ea2;
            --text-subtext: #868ea2;
            --text-title: #fff;
            --text-toggle: #e1e3e45e;
            --text-toggle_active: #e1e3e4;
            --tooltip: #2b3442;
            --xp-tag: #ffffff00;
        }
        @media (prefers-color-scheme: dark) {
            body {
                --avatar: #2d3848;
                --bg-transparent: hsl(216deg 23% 23% / 75%);
                --bkg-activity: #2d3848;
                --bkg-alt: #404a5f;
                --bkg-attention: #ab3f3f;
                --bkg-checkout: #404a5fb8;
                --bkg-color: #2d3848;
                --bkg-dark: #495a73;
                --bkg-disabled: #2d3848;
                --bkg-icon: #2d3848;
                --bkg-ios-dark: #2d3848;
                --bkg-ios: #404a5f;
                --bkg-item: #393e50;
                --bkg-item-mid: #3c4356;
                --bkg-overlay: rgb(45 45 45 / 75%);
                --bkg-post: #40495f;
                --bkg-qty: #6f788c;
                --bkg-select: #40495f;
                --bkg-shade: #40495f;
                --bkg-snap: #2d3848;
                --bkg-studio: #2d3848;
                --bkg-unset: unset;
                --bkg-unsetimg: unset;
                --border-activate: #fafafa7a;
                --border-studio: #ffffff00;
                --border-unset: #ffffff00;
                --border: #fafafa0f;
                --bright-soft: brightness(.94);
                --btn-light: #8b94a7;
                --btn-blue: #40495f;
                --bkg-opacity: #40485fcc;
                --color-primary-light: #152640;
                --color-primary: #2d3848;
                --color-secondary: #e684af;
                --content-editable: #40495f;
                --feed-icon: #2d3848;
                --opacity-alt: .95;
                --opacity-img: brightness(0.85) contrast(1.2);
                --opacity: 0.5;
                --placeholder: #96aabb;
                --price: #48e096;
                --shadow-avatar: #40495f;
                --shadow-swal: rgb(60 64 67 / 8%) 6px 8px 20px 1px;
                --studio: #2d3848;
                --tab-active: #fcfcfce8;
                --text-off: #7d8e9bff;
                --text-soft: #868ea2;
                --text-subtext: #868ea2;
                --text-title: #fff;
                --text-toggle: #e1e3e45e;
                --text-toggle_active: #e1e3e4;
                --tooltip: #2b3442;
                --xp-tag: #ffffff00;
            }
            body.light-theme {
                --avatar: #fff;
                --bg-transparent: hsl(0deg 0% 100% / 75%);
                --bkg-activity: #fff;
                --bkg-alt: #fafafa;
                --bkg-attention: #fffbdf;
                --bkg-checkout: #fafafa;
                --bkg-color: #fff;
                --bkg-dark: #e6e7e8;
                --bkg-disabled: #ffffff;
                --bkg-icon: #fafafa;
                --bkg-ios-dark: #efefef;
                --bkg-ios: #efefef;
                --bkg-item: #fbfdff;
                --bkg-item-mid: #fbfdff;
                --bkg-opacity: #fafafa70;
                --bkg-overlay: rgb(255 255 255 / 75%);
                --bkg-post: #fff;
                --bkg-qty: rgba(111, 111, 144, 0.85);
                --bkg-select: #fafafa;
                --bkg-shade: #f8fafd;
                --bkg-snap: #fafafa;
                --bkg-studio: #f8fafd;
                --bkg-unset: #fafafa;
                --bkg-unsetimg: #e5f4ff;
                --border-activate: #d6d6d6;
                --border-studio: #ededed;
                --border-unset: #fafafa;
                --border: #f5f5f5;
                --bright-soft: brightness(1);
                --btn-light: #4aabf0;
                --btn-blue: #3898ec;
                --color-primary-light: #152640;
                --color-primary: #fff;
                --color-secondary: #eec413;
                --content-editable: rgba(217, 245, 255,0.5);
                --feed-icon: #eef2f8;
                --opacity-alt: .8;
                --opacity-img: brightness(1) contrast(1);
                --opacity: 1;
                --placeholder: #00000021;
                --price: #45bb82;
                --shadow-avatar: #bbb;
                --shadow-swal: rgb(0 0 0 / 8%) 6px 8px 20px 1px;
                --studio: #f8fafd;
                --tab-active: #4aabf0;
                --text-off: #6f6f90;
                --text-soft: #6f6f908c;
                --text-subtext: #6f6f90ad;
                --text-title: #6b6b8c;
                --text-toggle: #6f6f904f;
                --text-toggle_active: #6f6f90;
                --tooltip: #544b4b;
                --xp-tag: #4eb1f7;
            }
        }
        .feed__stamp,
        .url {
            color: var(--text-soft)
        }
        .icon--feed,
        .feed__avatar--heart,
        .feed__box,
        .feed__tag--new {
            background: var(--feed-icon) !important
        }
        .btn--loadmore {
            background: var(--btn-blue)
        }
        .billing__item--tax,
        .billing__item--listing {
            background: var(--bkg-item)
        }
        .ladder__ul li.active {
            background: var(--bkg-select)
        }
        .swal2-popup  {
            box-shadow: var(--shadow-swal)
        }
        .checkout__disabled,
        .swal2-actions,
        .swal2-container.swal2-backdrop-show,
        .swal2-container.swal2-noanimation,
        .swal2-container.swal2-backdrop-hide,
        .swal2-hide,
        .mfp-bg {
            background: var(--bg-transparent) !important
        }
        .tag.tag--xp {
            border: 2px solid var(--xp-tag)
        }
        .price,
        .billing__total:not(.billing__total--credit){
            color: var(--price) !important
        }
        .btn,
        .uploader__img,
        .upload__remove {
            filter: var(--bright-soft);
        }
        .ladder__dropdown .ladder__ul li,
        .studio__label {
            color: var(--text-off)
        }
        [contenteditable="true"]:hover {
            background-color: var(--content-editable);
        }
        /*Set important for read/un-read states in dark mode*/
        .avatar__img--logo_reccuring,
        .avatar__img--recurring {
            background: var(--bkg-color) !important;
        }
        .activity__item {
            background: var(--bkg-activity);
        }
        .activity__item--read {
            background: var(--bkg-shade) !important;
        }
        .sub__qty {
            color: var(--bkg-qty);
            background: var(--bkg-unset);
        }
        .resize__icon {
            background: var(--bkg-alt);
        }
        .resize__icon.active {
            background: var(--btn-light);
        }
        [data-view="snap"] .listing__item,
        [data-view="snap"] .listing__img {
            background: var(--bkg-snap);
        }
        .key__wrapper li.tag {
            opacity: var(--opacity-alt)
        }
        img,
        .post__header,
        .post__footer,
        .gallery__thumb a > .gallery__img,
        .post__icon {
            filter: var(--opacity-img);
        }
        .post__sold {
            background-color: var(--bkg-opacity);
        }
        .post__mid:not(.post__mid--large) > div {
            /*background: var(--bkg-avatar);*/
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90px;
            width: 90px;
            border-radius: 50%;
        }
        .counter,
        .progress__slider,
        .sort__label input:checked ~ .sort__text {
            background: var(--bkg-dark) !important;
        }
        .upload__img--newbig,
        .upload__imgbox--new {
            background: var(--bkg-unsetimg) !important;
        }
        /*Removing border from Studio select boxes */
        .studio__input,
        .video__html input,
        .key__wrapper li input,
        .selected--category,
        .selected--subcategory,
        .studio__radios label {
            border: 2px solid var(--border-unset) !important;
        }
        /*iOS Toggle */
        .ios__track,
        .ios__toggle {
            background: var(--bkg-ios);
        }
        .ios__track--alt,
        .ios__track--header,
        .ios__toggle--header {
            background: var(--bkg-ios-dark);
        }
        /*Box Shadows*/
        #account,
        .header__thumb {
            box-shadow: 1px 1px 3px 0 var(--shadow-avatar);
        }
        /*  disabled button for admin invite*/
        .btn--invite[disabled],
        .post__sold--subitem {
            opacity: 0.6;
            background: var(--bkg-disabled);
        }
        /*  dark (dark) to yellow warning (light) for note::*/
        .note--attention {
            background: var(--bkg-attention);
        }
        /* white (dark) to shade (dark) */
        .view__toggle.active {
            color: var(--text-toggle_active);
        }
        .view__toggle {
            color: var(--text-toggle);
        }
        /* dark (dark) #fafafa (light) -> category svg bg */
        .id__html--category,
        .filter__toggle.checked {
            background: var(--bkg-icon)
        }
        /* dark (dark) to white (light) for donor avatart*/
        .donors__item {
            border: 3px solid var(--avatar)
        }
        /* shade (dark) to #fff (light) -> post items, etc. **not set** */
        .post__main,
        .post__details,
        .post__category,
        .bulk:not(.bulk--organization) {
            background: var(--bkg-post);
        }
        .checkout__thumb {
            background: var(--bkg-checkout);
        }
        /*Placeholders:*/
        ::-webkit-input-placeholder {
            color: var(--placeholder)
        }
        ::-moz-placeholder {
            color: var(--placeholder)
        }
        :-ms-input-placeholder {
            color: var(--placeholder)
        }
        :-moz-placeholder {
            color: var(--placeholder)
        }
        a[data-tooltip]:before {
            border-top-color: var(--tooltip) !important;
            background: var(--tooltip) !important
        }
        .donation__overlay,
        .lg-backdrop {
            background: var(--bkg-overlay) !important
        }
        body,
        .activity__controls,
        .activity__controls,
        .activity__controls,
        .avatar__box--user,
        .bank__dialogue,
        .btn--removetag,
        .cart__controls,
        .cart__list li,
        .cart__remove,
        .disabled,
        .donation__dialogue,
        .donorport__icon,
        .empty__block,
        .empty__icon--admin,
        .filter,
        .filter__slider,
        .grab__header,
        .grab__input,
        .grab__item,
        .icon--cancelled,
        .input__span,
        .ladder__ul.active,
        .lg-group,
        .lg-icon,
        .linked__item,
        .login__modal,
        .menu__title,
        .modal__block,
        .modal__item,
        .options--feed:after,
        .options label:hover,
        .options__item,
        .studio__section,
        .swal2-show,
        .tab__menu--main,
        .upload__imgbox,
        .watch__item,
        .wish__item,
        .wish__remove,
        .wish__wrapper {
            background-color: var(--bkg-color);
        }
        .about__banner,
        .about__tag,
        .about__title,
        .accounts__icon,
        .account__footer,
        .activate--settings,
        .activity,
        .admin__delete,
        .avatar__block:not(.avatar__block--milestone),
        .avatar--grab,
        .avatar__img:not(.avatar__img--log):not(.avatar__img--comment):not(.avatar__img--user),
        .badge__current,
        .bar:not(.bar--page),
        .billing__item--listing:hover,
        .billing__item--recurring,
        .billing__payment,
        .bulk__input,
        .bulk__input--alt,
        .cart__img,
        .cart__list,
        .checkout__block--bg,
        .checkout__undo,
        .container--bg,
        .deactivate,
        .details__error,
        .donation__footer,
        .donorport,
        .donors__item,
        .draft__avatar,
        .empty--uploads,
        .empty__circle,
        .feed__block,
        .feed__bulk,
        .feed__event,
        .feed__image,
        .feed__item,
        .feed__menu.open,
        .filter__wrap,
        .footer,
        .from-me:after,
        .from-them:after,
        .gallery__thumb a,
        .grab__checkout,
        .grab__header,
        .grab__radio,
        .header__tab,
        .help__icon,
        .icon--bank,
        .icon--billing,
        .icon--listing,
        .id:not(.id--location),
        .lazy,
        .linked__avatar,
        .linked__empty,
        .linked__item,
        .listing__badge,
        .listing__commentblock,
        .listing__img,
        .listing__left.active,
        .listing__type,
        .listing__type,
        .login,
        .login__message,
        .log__bottom,
        .log__item--verified,
        .media__box,
        .modal,
        .modal:after,
        .modal__footer,
        .modal__header,
        .modal__subheader,
        .note:not(.note--attention),
        .options label:hover,
        .order__footer,
        .order__icon,
        .order__thumb,
        .organization__link,
        .page__section--followup,
        .password-strength-visualization-bar-scale,
        .post__badge,
        .post__top,
        .post__video,
        .progress__slider--listing,
        .qtytag,
        .search__label li.tag,
        .selected--category,
        .selected--subcategory,
        .settings__theme > label,
        .studio__radios label,
        .suggested,
        .sweet__logo,
        .tab__btn.w--current,
        .tag--rank,
        .uploader__fileerror,
        .uploader__filename,
        .upload__html,
        .upload__html--new,
        .upload__imgbox--sub,
        .watch__thumb,
        .wish__list,
        .wish__thumb,
        .you__item {
            background-color: var(--bkg-shade);
        }
        .lg-toogle-thumb,
        .lg-inner,
        .lg-next,
        .lg-prev,
        .lg-thumb-item,
        .lg-thumb-outer,
        .lg-toolbar,
        .irs-line,
        .swal2-actions {
            background: var(--bkg-shade) !important;
        }
        h1, h2, h3, h4:not(.lg-sub-html h4), h5, h6,
        .about__thumb,
        .about__title,
        .accounts__email,
        .activate__input,
        .activity__name,
        .admin__name,
        .billing__card,
        .billing__name,
        .billing__title,
        .btn--random,
        .select--share,
        .bulk,
        .card__input,
        .card__label,
        .cart__name,
        .category__item label,
        .checkout__label,
        .checkout__title,
        .checkout__undo,
        .deactivate,
        .feed__description,
        .feed__head,
        .feed__search input,
        .feed__stat,
        .feed__tag--new,
        .feed__title,
        .filter__toggle.checked,
        .footer__logo,
        .footer__title,
        .icon--info,
        .id:not(.id--location),
        .input textarea,
        .input__label input,
        .input__label textarea,
        .ladder__selected,
        .ladder__ul li.active,
        .linked__details,
        .login__subheader,
        .logo__heading,
        .log__bottom,
        .log__title,
        .modal__subheader,
        .note,
        .options__item,
        .order__footer,
        .order__headline,
        .page__blurb,
        .post__category,
        .post__count,
        .post__count--checkout,
        .post__details,
        .post__title,
        .post__top,
        .post__video,
        .post__videolink,
        .price--fee,
        .pure-material-checkbox,
        .rank__tab--grand,
        .rank__tab--ladder,
        .rank__value,
        .saved__bank,
        .saved__cvc,
        .saved__exp,
        .settings__header,
        .settings__theme > label,
        .sku__wrap,
        .studio__input,
        .studio__review,
        .studio__tabbtn,
        .sub__qty,
        .subheader__name,
        .swal2-popup .swal2-title,
        .sweet__input,
        .sweet__title,
        .tab__btn.w--current,
        .team__info,
        .title--header,
        .title--small,
        .title:not(.title--header),
        .update__tabbtn.w--current,
        .uploader__fileerror,
        .upload__filename,
        .visibility__label,
        .visibility__label > a,
        .watch__left,
        .wish__name,
        .you__item {
            color: var(--text-title) !important;
        }
        .post__svg > svg > path {
            fill: var(--text-title);
        }
        .about__tag,
        .activity__sub,
        .admin__date,
        .admin__email,
        .avatar__img--recent,
        .bank__legend,
        .billing__action,
        .billing__address,
        .billing__date,
        .billing__info,
        .billing__monthly,
        .billing__small,
        .billing__type,
        .card__save,
        .checkout__details,
        .checkout__info,
        .checkout__secure,
        .date__name,
        .donation__dialogue,
        .donation__radio label,
        .donation__review,
        .feed__avatar--likedplus,
        .feed__because,
        .feed__count,
        .feed__reason,
        .feed__noresults,
        .feed__tag,
        .filter__toggle,
        .grab__item,
        .grab__radio,
        #lg-counter,
        .lg-toolbar .lg-icon,
        .link:not(.link--feed),
        .linked__empty,
        .listing__label,
        .list__item,
        .mark,
        .order__coffee,
        .order__coffee a,
        .order__id,
        .order__subdate,
        .page__date,
        .page__label--sub,
        .page__paragraph,
        .post__order,
        .post__tab--large,
        .search__label--key * li,
        .sort__text,
        .sponsor__item,
        .studio__characters,
        .studio__subtitle,
        .swal2-html-container,
        .sweet__block,
        .sweet__text,
        .tab__btn,
        .team__role,
        .terms__subsection,
        .time,
        .tooltip,
        .upload__fileinfo,
        .update__tabbtn,
        .watch__button--read,
        .watch__checkbox {
            color: var(--text-subtext) !important;
        }
        input:not(.activate__input, .studio__input),
        textarea,
        [data-view="snap"] .listing__item,
        #selected--option.active,
        .about__banner,
        .account__footer,
        .activity__controls,
        .activity__item,
        .bar,
        .badge__content,
        .badge__item,
        .billing__item--tax,
        .billing__item--listing,
        .billing__item--log,
        .billing__sort,
        .billing__wrap--table,
        .bulk--organization,
        .cart__controls,
        .cart__list li,
        .category__item,
        .checkout__block--grandtotal,
        .checkout__header--items,
        .checkout__item,
        .checkout__pay,
        .create__header,
        .content--alt,
        .donation__radio > div,
        .donation__radio label,
        .feed__all,
        .feed__item,
        .feed__sticky,
        .feed__tag--new,
        .filter,
        .filter__slider,
        .footer,
        .footer__bottom,
        .fulfill,
        .grab__item,
        .grab__radio,
        .grand,
        .input__block,
        .ladder__item,
        .ladder__select,
        .lg-thumb-item,
        .lg-thumb-outer,
        .lg-toolbar,
        .listing__bottom,
        .listing__header,
        .listing__media,
        .listing__mediaerror,
        .listing__select,
        .listing__stats,
        .listing__status,
        .listing__subheader,
        .locations,
        .log__recent,
        .media__box,
        .menu__title,
        .modal__footer,
        .modal__header,
        .modal__item,
        .options label,
        .order__footer,
        .order__title,
        .page,
        .post__details,
        .post__top,
        .receipt__list--user,
        .saved__seperator,
        .scroll,
        .studio__header,
        .studio__section,
        .studio__tabs,
        .studio__title,
        .sub__item--wish,
        .suggested,
        .watch__item,
        .wish__item,
        .wish__remove,
        .xp__tag {
            border-color: var(--border) !important;
        }
        .activate__input {
            border-color: var(--border-activate) !important;
        }
        @media screen and (max-width: 991px) {
            .billing__item:not(.billing__item--recurring){
                border-bottom: 1px solid var(--border) !important;
            }
        }
        @media screen and (max-width: 479px) {
            .listing__left:not(.active):hover {
                background: unset !important
            }
            .tab__menu.tab__menu--main,
            .bar__buttons,
            .swal2-actions {
                background: var(--bkg-color) !important;
            }
            .admin__left
            .listing__grand,
            .tab__btn.active,
            .post__mid--large {
                background: var(--bkg-shade) !important;
            }
            .tab__btn.active,
            #selected--option.active {
                color: var(--text-title) !important;
            }
            .order__wrap {
                border-bottom: 1px solid var(--border) !important;
            }
        }
        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        [data-select="none"] {
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        html {
            overflow: hidden;
        }
        body {
            width: 100%;
            height: 100%;
            position: fixed;
            overflow-y: auto;
            overflow-x: hidden;
            -webkit-overflow-scrolling: touch;
        }
        div,
        button,
        textarea,
        input,
        select,
        a {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            -webkit-tap-highlight-color: transparent;
        }
        input {
            background: rgba(255, 0, 0, 0);
            border: none;
        }
        img,
        svg
            /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        /* Firefox */
        input[type="number"] {
            -moz-appearance: textfield;
        }
        [data-animate='ripple'] {
            position: relative;
            overflow: hidden;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
        }
        [data-animate='ripple']:hover {
            opacity: 0.85;
        }
        [data-animate='ripple'] .rippling {
            width: 5px;
            height: 5px;
            background: #fff;
            border-radius: 50%;
            position: absolute;
            opacity: 0.4;
            pointer-events: none;
            -webkit-transform: translate3d(-50%, -50%, 0) translateY(1px);
            transform: translate3d(-50%, -50%, 0) translateY(1px);
        }
    </style>
    <link rel="alternate" hreflang="en" href="https://www.donorport.com">
    <link rel="alternate" hreflang="zh" href="https://zh.donorport.com">
    <meta name="theme-color" content="#6d6bb5">
    <meta name="msapplication-TileColor" content="#6d6bb5">
    <meta name="msapplication-navbutton-color" content="#6d6bb5">
    <meta name="apple-mobile-web-app-status-bar-style" content="#6d6bb5">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.6.10/lottie.min.js" integrity="sha256-/56Y/jYu6730zlN8iulnNWn2IcVa4wK/ogwk7n9p2JY=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/autonumeric/4.1.0/autoNumeric.min.js"></script>
    <style>
        .post__list .post__item {
            width: calc(100% / 4);
        }
        .post__list[max-width~="1250px"] .post__item {
            width: calc(100% / 3);
        }
        @media only screen and (max-width: 1250px) {
            .post__list .post__item {
                width: calc(100% / 3);
            }
        }
        .post__list[max-width~="950px"] .post__item {
            width: calc(100% / 2);
        }
        @media only screen and (max-width: 950px) {
            .post__list .post__item {
                width: calc(100% / 2);
            }
        }
        .post__list[max-width~="550px"] .post__item {
            width: 100%;
        }
        @media only screen and (max-width: 550px) {
            .post__list .post__item {
                width: 100%;
            }
        }
        .underline {
            color: orange !important;
            text-decoration: underline !important;
        }
    </style>
</head>
<body>
<div class="css-bank">
    <div class="css-cat-buttons w-embed">
        <style>
            .category__label.focuss > .category__text {
                display: flex;
                color: white;
            }
            .category__text {
                color: #68688ae0;
                display: none;
            }
            .category__item label {
                display: flex;
                align-items: center;
                padding: 0 .3rem;
                justify-content: center;
                cursor: pointer;
                font-weight: 600;
                font-size: 12px;
                height: 42px;
                flex-direction: column;
                margin: 9px;
                line-height: .9rem;
                flex: 1;
                border-radius: 3px;
            }
            .category__item input {
                visibility: hidden;
                display: none
            }
            .category__icon > * {
                pointer-events: none
            }
            .category__icon {
                height: 24px;
                width: 24px;
                margin: 9px;
            }
            .focuss {
                color: white;
                -webkit-animation-name: animate;
                animation-name: animate;
                -webkit-animation-duration: 175ms;
                animation-duration: 175ms;
                -webkit-animation-iteration-count: 1;
                animation-iteration-count: 1;
                -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                curors: pointer !important;
                opacity: 1 !important;
            }
            .focuss::after {
                display: none !important;
                padding-left: 15px;
                margin-right: 12px;
                /*  -webkit-animation: slideRight;
  animation: slideRight;*/
                -webkit-animation-duration: 375ms;
                animation-duration: 375ms;
                -webkit-animation-iteration-count: 1;
                animation-iteration-count: 1;
                -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }
            @media (max-width: 479px) {
                .category__item {
                    width: calc(100%/4);
                }
            }
            @-webkit-keyframes animate {
                0% {
                    -webkit-transform: scale(0.95);
                    transform: scale(0.95);
                }
                25% {
                    -webkit-transform: scale(1.05);
                    transform: scale(1.05);
                }
                75% {
                    -webkit-transform: scale(0.99);
                    transform: scale(0.99);
                }
                100% {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                }
            }
            @keyframes animate {
                0% {
                    -webkit-transform: scale(0.95);
                    transform: scale(0.95);
                }
                25% {
                    -webkit-transform: scale(1.05);
                    transform: scale(1.05);
                }
                75% {
                    -webkit-transform: scale(0.99);
                    transform: scale(0.99);
                }
                100% {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                }
            }
        </style>
    </div>
    <div class="css-lottie w-embed">
        <style>
            #box path {
                fill: #6499e9;
                stroke: #6499e9;
            }
            #box svg {
                min-height: 32px;
                max-height: 32px;
                margin-top: -3px;
            }
            #slider path {
                fill: white;
                stroke: white;
            }
            #slider svg {
                max-height: 21px;
            }
            #shuffle svg {
                min-width: 42px;
            }
            /*#slider.active > svg {
  transform: scale(1);
  animation: pulse 0.5s forwards;
  transition: 0.2s cubic-bezier(0.45, 0, 0.55, 1);
}*/
            #box.active > svg {
                transform: scale(0.9) translatey(3px) !important;
                transform-origin: center;
                transition: 0.2s cubic-bezier(0.45, 0, 0.55, 1);
            }
            @media (max-width: 479px) {
                #box path {
                    fill: white;
                    stroke: white;
                }
                #box svg {
                    min-height: 34px;
                }
                #slider svg {
                    min-height: 26px;
                    max-height: 26px;
                }
                #shuffle svg {
                    min-height: 46px;
                    max-width: 46px;
                }
            }
            @keyframes pulse {
                0% {
                    transform: scale(0.6);
                }
                50% {
                    transform: scale(1.1);
                }
                100% {
                    transform: scale(1);
                }
            }
        </style>
    </div>
    <div class="css-grab w-embed">
        <style>
            .grab__lowvalue {
                font-weight: 900;
                font-size: 13px;
                color: #6f6f90;
            }
            input.grab__inputvalue,
            input.bulk__inputvalue {
                display: none;
            }
            .btn--generate {
                height: 32px;
                width: 32px;
                font-family: 'Font awesome 5 pro solid 900',sans-serif;
                padding: 12px 9px;
                outline: none;
                font-size: 14px;
                background: none;
                color: #756fe4;
            }
            .grab__input,
            .bulk__input {
                width: 105px;
                height: 32px;
                outline: none;
                padding: .4rem .6rem;
                font-size: 16px;
                border: none;
                border-radius: 4px;
                margin-right: 9px;
            }
            .grab__input::-webkit-input-placeholder
            .bulk__input::-webkit-input-placeholder {
                /* WebKit, Blink, Edge */
                color: #d8d8d8;
                font-size: 12px;
            }
            .grab__input:-moz-placeholder,
            .bulk__input:-moz-placeholder{
                /* Mozilla Firefox 4 to 18 */
                color: #d8d8d8;
                font-size: 12px;
                opacity: 1;
            }
            .grab__input::-moz-placeholder,
            .bulk__input::-moz-placeholder{
                /* Mozilla Firefox 19+ */
                color: #d8d8d8;
                font-size: 12px;
                opacity: 1;
            }
            .grab__input:-ms-input-placeholder,
            .bulk__input:-ms-input-placeholder {
                /* Internet Explorer 10-11 */
                color: #d8d8d8;
                font-size: 12px;
            }
            @media screen and (max-width:479px) {
                .bulk__input {
                    width: 100%;
                    min-width: auto;
                    max-width: 100%;
                }
            }
        </style>
    </div>
</div>
<div class="header">
    <div class="header__wrap">
        <div class="css-bank">
            <div class="css-icons w-embed">
                <style>
                    .notify > *,
                    .cart > *,
                    .activity__button > * {
                        pointer-events: none
                    }
                    /*For header icon spacing*/
                    .header__right > div {
                        margin-left: .9rem
                    }
                </style>
            </div>
        </div>
        <div class="header__left">
            <div class="logo w-clearfix">
                <a href="index.html" aria-current="page" class="logo__img w-inline-block w--current"></a>
                <h5 class="logo__heading">Donorport</h5>
            </div>
        </div>
        <div class="header__right">
            <div class="theme__html w-embed">
                <div class="theme__toggle" id="toggleTheme">
                    <span class="moon"></span>
                    <span class="sun"></span>
                    <small class="sun__ray"></small>
                    <small class="sun__ray"></small>
                    <small class="sun__ray"></small>
                    <small class="sun__ray"></small>
                    <small class="sun__ray"></small>
                    <small class="sun__ray"></small>
                </div>
                <style>
                    * {
                        box-sizing: border-box;
                    }
                    .theme__toggle {
                        height: 27px;
                        width: 27px;
                        position: absolute;
                        top: 50%;
                        right: 50%;
                        cursor: pointer;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        transform: translate(50%, -50%);
                    }
                    .theme__toggle .sun {
                        background: var(--color-secondary);
                        width: 27px;
                        height: 27px;
                        border-radius: 50%;
                        border: 4px solid var(--color-primary);
                    }
                    .theme__toggle .sun__ray {
                        display: none;
                        width: 2px;
                        background: var(--color-secondary);
                        height: 125%;
                        position: absolute;
                        z-index: -1;
                        transition: 0.4s all, height 0.3s ease-in-out;
                    }
                    .theme__toggle .sun__ray:nth-child(1) {
                        transform: rotate(calc(1 * calc(360deg / 12)));
                    }
                    .theme__toggle .sun__ray:nth-child(2) {
                        transform: rotate(calc(2 * calc(360deg / 12)));
                    }
                    .theme__toggle .sun__ray:nth-child(3) {
                        transform: rotate(calc(3 * calc(360deg / 12)));
                    }
                    .theme__toggle .sun__ray:nth-child(4) {
                        transform: rotate(calc(4 * calc(360deg / 12)));
                    }
                    .theme__toggle .sun__ray:nth-child(5) {
                        transform: rotate(calc(5 * calc(360deg / 12)));
                    }
                    .theme__toggle .sun__ray:nth-child(6) {
                        transform: rotate(calc(6 * calc(360deg / 12)));
                    }
                    .theme__toggle .sun__ray:nth-child(7) {
                        transform: rotate(calc(7 * calc(360deg / 12)));
                    }
                    .theme__toggle .sun__ray:nth-child(8) {
                        transform: rotate(calc(8 * calc(360deg / 12)));
                    }
                    .theme__toggle .sun__ray:nth-child(9) {
                        transform: rotate(calc(9 * calc(360deg / 12)));
                    }
                    .theme__toggle .sun__ray:nth-child(10) {
                        transform: rotate(calc(10 * calc(360deg / 12)));
                    }
                    .theme__toggle .sun__ray:nth-child(11) {
                        transform: rotate(calc(11 * calc(360deg / 12)));
                    }
                    .theme__toggle .sun__ray:nth-child(12) {
                        transform: rotate(calc(12 * calc(360deg / 12)));
                    }
                    .theme__toggle:hover .sun__ray:nth-child(1) {
                        transform: rotate(calc(calc(1 * calc(360deg / 12)) - 20deg));
                    }
                    .theme__toggle:hover .sun__ray:nth-child(2) {
                        transform: rotate(calc(calc(2 * calc(360deg / 12)) - 20deg));
                    }
                    .theme__toggle:hover .sun__ray:nth-child(3) {
                        transform: rotate(calc(calc(3 * calc(360deg / 12)) - 20deg));
                    }
                    .theme__toggle:hover .sun__ray:nth-child(4) {
                        transform: rotate(calc(calc(4 * calc(360deg / 12)) - 20deg));
                    }
                    .theme__toggle:hover .sun__ray:nth-child(5) {
                        transform: rotate(calc(calc(5 * calc(360deg / 12)) - 20deg));
                    }
                    .theme__toggle:hover .sun__ray:nth-child(6) {
                        transform: rotate(calc(calc(6 * calc(360deg / 12)) - 20deg));
                    }
                    .theme__toggle:hover .sun__ray:nth-child(7) {
                        transform: rotate(calc(calc(7 * calc(360deg / 12)) - 20deg));
                    }
                    .theme__toggle:hover .sun__ray:nth-child(8) {
                        transform: rotate(calc(calc(8 * calc(360deg / 12)) - 20deg));
                    }
                    .theme__toggle:hover .sun__ray:nth-child(9) {
                        transform: rotate(calc(calc(9 * calc(360deg / 12)) - 20deg));
                    }
                    .theme__toggle:hover .sun__ray:nth-child(10) {
                        transform: rotate(calc(calc(10 * calc(360deg / 12)) - 20deg));
                    }
                    .theme__toggle:hover .sun__ray:nth-child(11) {
                        transform: rotate(calc(calc(11 * calc(360deg / 12)) - 20deg));
                    }
                    .theme__toggle:hover .sun__ray:nth-child(12) {
                        transform: rotate(calc(calc(12 * calc(360deg / 12)) - 20deg));
                    }
                    .moon {
                        height: 18px;
                        width: 18px;
                        position: absolute;
                        background: var(--color-primary);
                        border-radius: 50%;
                        top: 0;
                        right: 0;
                        transform: scale(0) translate(25%, -25%);
                        z-index: 9;
                        transition: 0.4s transform;
                        transform-origin: right;
                    }
                    .dark-theme .theme__toggle {
                        background-color: var(--color-primary);
                    }
                    .dark-theme .theme__toggle:hover .moon {
                        transform: scale(1) translate(-3%, -18%);
                    }
                    .dark-theme .moon {
                        transform: scale(1) translate(11%, -11%);
                    }
                    .dark-theme .theme__toggle .sun__ray {
                        height: 0;
                        transition: 0.4s, transform 0.4s, height 0.2s 0.1s;
                    }
                    .dark-theme .theme__toggle .sun__ray:nth-child(1) {
                        transform: rotate(calc(calc(1 * calc(360deg / 12)) - 45deg));
                    }
                    .dark-theme .theme__toggle .sun__ray:nth-child(2) {
                        transform: rotate(calc(calc(2 * calc(360deg / 12)) - 45deg));
                    }
                    .dark-theme .theme__toggle .sun__ray:nth-child(3) {
                        transform: rotate(calc(calc(3 * calc(360deg / 12)) - 45deg));
                    }
                    .dark-theme .theme__toggle .sun__ray:nth-child(4) {
                        transform: rotate(calc(calc(4 * calc(360deg / 12)) - 45deg));
                    }
                    .dark-theme .theme__toggle .sun__ray:nth-child(5) {
                        transform: rotate(calc(calc(5 * calc(360deg / 12)) - 45deg));
                    }
                    .dark-theme .theme__toggle .sun__ray:nth-child(6) {
                        transform: rotate(calc(calc(6 * calc(360deg / 12)) - 45deg));
                    }
                    .dark-theme .theme__toggle .sun__ray:nth-child(7) {
                        transform: rotate(calc(calc(7 * calc(360deg / 12)) - 45deg));
                    }
                    .dark-theme .theme__toggle .sun__ray:nth-child(8) {
                        transform: rotate(calc(calc(8 * calc(360deg / 12)) - 45deg));
                    }
                    .dark-theme .theme__toggle .sun__ray:nth-child(9) {
                        transform: rotate(calc(calc(9 * calc(360deg / 12)) - 45deg));
                    }
                    .dark-theme .theme__toggle .sun__ray:nth-child(10) {
                        transform: rotate(calc(calc(10 * calc(360deg / 12)) - 45deg));
                    }
                    .dark-theme .theme__toggle .sun__ray:nth-child(11) {
                        transform: rotate(calc(calc(11 * calc(360deg / 12)) - 45deg));
                    }
                    .dark-theme .theme__toggle .sun__ray:nth-child(12) {
                        transform: rotate(calc(calc(12 * calc(360deg / 12)) - 45deg));
                    }
                </style>
            </div>
            <div id="cart" data-close="cart" data-id="trigger" class="cart">
                <div class="badge w-embed"><span class="badge__count"></span>
                    <style>
                        .badge {
                            background-color: #6394f8;
                            border-radius: 10px;
                            color: #fdfdfd;
                            position: absolute;
                            font-family: "Jcfonts linotte", Arial, sans-serif;
                            left: 9px;
                            top: -12px;
                            display: inline-block;
                            font-size: 10px;
                            line-height: 1;
                            margin-left: 6px;
                            padding: 3px 6px;
                            letter-spacing: -0.09rem;
                            text-align: center;
                            vertical-align: middle;
                            white-space: nowrap;
                            opacity: 0;
                            visibility: hidden;
                            -webkit-transform: scale(0.5);
                            -ms-transform: scale(0.5);
                            transform: scale(0.5);
                            -webkit-transform-origin: center;
                            -ms-transform-origin: center;
                            transform-origin: center;
                            -webkit-transition: 0.15s;
                            -o-transition: 0.15s;
                            transition: 0.15s;
                        }
                        .badge.active {
                            opacity: 1;
                            visibility: visible;
                            -webkit-transform: scale(1);
                            -ms-transform: scale(1);
                            transform: scale(1);
                        }
                        .badge__count {
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            letter-spacing: 0.01rem;
                            -webkit-box-align: center;
                            -ms-flex-align: center;
                            align-items: center;
                            -webkit-box-pack: center;
                            -ms-flex-pack: center;
                            justify-content: center;
                            min-width: 6px;
                            font-weight: 700;
                            padding-top: 2px;
                        }
                        .badge svg:not(:root) {
                            overflow: hidden;
                            fill: #6f6e91;
                            margin-right: 6px;
                        }
                    </style>
                </div>
                <div><strong></strong></div>
            </div>
            <div id="notify" data-close="notify" data-id="trigger" class="notify">
                <div><strong></strong></div>
                <div class="indicator">
                    <div class="notifcation notification--admin"></div>
                </div>
            </div>
            <div class="w-dyn-list">
                <div role="list" class="w-dyn-items">
                    <div role="listitem" class="header__user w-dyn-item">
                        <a href="#" id="account" data-close="account" data-id="trigger" class="header__thumb w-inline-block"></a>
                    </div>
                </div>
                <div class="empty__item w-dyn-empty">
                    <div>No items found.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="sticky">
            <div data-id="account" class="modal modal--account">
                <div class="modal__slide modal__slide--account w-dyn-list">
                    <div role="list" class="w-dyn-items">
                        <div role="listitem" class="modal__account w-dyn-item">
                            <div class="modal__subheader modal__subheader--main">
                                <div class="header__thumb header__thumb--large"></div>
                                <a href="login.html" class="subheader__name w-inline-block">
                                    <div></div>
                                </a>
                                <div class="verified">
                                    <div><strong></strong></div>
                                </div>
                            </div>
                            <div class="modal__body">
                                <div class="modal__main">
                                    <a data-animate="ripple" href="#" class="modal__item modal__item--profile w-inline-block">
                                        <div class="modal__icon">
                                            <div><strong class="modal__icon"></strong></div>
                                        </div>
                                        <div class="modal__name">
                                            <div>Profile</div>
                                        </div>
                                    </a>
                                    <a data-animate="ripple" href="feed.html" class="modal__item modal__item--feed w-inline-block">
                                        <div class="modal__icon">
                                            <div><strong class="modal__icon"></strong></div>
                                        </div>
                                        <div class="modal__name">
                                            <div>Feed</div>
                                        </div>
                                    </a>
                                    <ul role="list" class="modal__list w-list-unstyled">
                                        <li id="open_wish" data-animate="ripple" class="modal__item">
                                            <a href="#" class="modal__link w-inline-block">
                                                <div class="modal__icon">
                                                    <div><strong></strong></div>
                                                </div>
                                                <div class="modal__name">
                                                    <div>Wishlist</div>
                                                </div>
                                                <div class="account__next">
                                                    <div><strong></strong></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li id="open_settings" data-animate="ripple" class="modal__item modal__item--settings">
                                            <a href="#" class="modal__link modal__link--settings w-inline-block">
                                                <div class="modal__icon">
                                                    <div><strong></strong></div>
                                                </div>
                                                <div class="modal__name">
                                                    <div>Settings</div>
                                                </div>
                                                <div class="account__next">
                                                    <div><strong></strong></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li id="open_org" data-animate="ripple" class="modal__item">
                                            <a href="#" class="modal__link w-inline-block">
                                                <div class="modal__icon">
                                                    <div><strong></strong></div>
                                                </div>
                                                <div class="modal__name">
                                                    <div>Linked Organizations</div>
                                                </div>
                                                <div class="account__next">
                                                    <div><strong></strong></div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <a data-animate="ripple" href="myxp.html" class="modal__item w-inline-block">
                                        <div class="modal__icon">
                                            <div><strong class="modal__icon"></strong></div>
                                        </div>
                                        <div class="modal__name">
                                            <div>My XP</div>
                                        </div>
                                    </a>
                                    <a data-animate="ripple" href="login.html" class="modal__item modal__item--signout w-inline-block">
                                        <div class="modal__icon">
                                            <div><strong class="modal__icon"></strong></div>
                                        </div>
                                        <div class="modal__name">
                                            <div>Sign out</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="modal__footer"></div>
                        </div>
                    </div>
                    <div class="empty__item w-dyn-empty">
                        <div>No items found.</div>
                    </div>
                </div>
                <div data-id="wishlist" class="modal__slide modal__slide--wish">
                    <div class="modal__subheader">
                        <a href="#" id="back_wish" class="modal__back w-inline-block">
                            <div><strong></strong></div>
                        </a>
                        <h5>Wishlist</h5>
                    </div>
                    <div class="wish__wrapper">
                        <ul data-scroll="vertical" role="list" class="wish__list w-list-unstyled"></ul>
                        <div class="wish__list--empty">
                            <div class="empty__block empty__block--main">
                                <div class="empty__icon">
                                    <div class="empty__circle empty__circle--xsmall"><img src="images/text-lines.svg" alt=""></div>
                                </div>
                                <h6>Your Wishlist is empty.</h6>
                            </div>
                        </div>
                        <div class="modal__footer"></div>
                    </div>
                </div>
                <div class="modal__slide modal__slide--settings">
                    <div class="modal__subheader">
                        <a href="#" id="back_settings" class="modal__back w-inline-block">
                            <div><strong></strong></div>
                        </a>
                        <h5>Quick Settings</h5>
                    </div>
                    <div class="modal__block">
                        <div class="menu">
                            <div class="menu__title">
                                <h6>Locations</h6>
                                <div class="menu__subtext">
                                    <div>set default location filters</div>
                                </div>
                            </div>
                            <ul role="list" class="menu__list menu__list--locations w-list-unstyled">
                                <li class="menu__item">
                                    <div class="locations locations--settings w-dyn-list">
                                        <div role="list" class="locations__list locations__list--settings w-dyn-items">
                                            <div role="listitem" class="locations__item w-dyn-item">
                                                <div class="locations__btns w-embed">
                                                    <!-- item__checkboxes classes needed for filtering code -->
                                                    <div class="tagbox" data-type="tagbox">
                                                        <input id="quick_" type="checkbox" value="" data-color="">
                                                        <label data-rgb="" for="quick_">
                                                            <mark style="background-color: rgb();" class="dot on"></mark>
                                                            <text class="text--tagbox"></text>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="empty__item w-dyn-empty">
                                            <div>No items found.</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="menu">
                            <div class="menu__title">
                                <h6>UI</h6>
                            </div>
                            <ul role="list" class="menu__list w-list-unstyled">
                                <li class="menu__item">
                                    <div class="menu__option">
                                        <div>Hide recommended items</div>
                                    </div>
                                    <div class="menu__toggle w-embed">
                                        <div class="ios__toggle">
                                            <input type="checkbox" class="ios__check">
                                            <b class="ios__switch"></b>
                                            <b class="ios__track"></b>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu__item">
                                    <div class="menu__option">
                                        <div>Hide sold items</div>
                                    </div>
                                    <div class="menu__toggle w-embed">
                                        <div class="ios__toggle">
                                            <input type="checkbox" checked="" class="ios__check">
                                            <b class="ios__switch"></b>
                                            <b class="ios__track"></b>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu__item">
                                    <div class="menu__option">
                                        <div>Remove share buttons</div>
                                    </div>
                                    <div class="menu__toggle w-embed">
                                        <div class="ios__toggle">
                                            <input type="checkbox" class="ios__check">
                                            <b class="ios__switch"></b>
                                            <b class="ios__track"></b>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="menu">
                            <div class="menu__title">
                                <h6>Privacy</h6>
                            </div>
                            <ul role="list" class="menu__list w-list-unstyled">
                                <li class="menu__item">
                                    <div class="menu__option">
                                        <div>Make profile private?</div>
                                    </div>
                                    <div class="menu__toggle w-embed">
                                        <div class="ios__toggle">
                                            <input type="checkbox" checked="" class="ios__check">
                                            <b class="ios__switch"></b>
                                            <b class="ios__track"></b>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal__footer"></div>
                </div>
                <div class="modal__slide modal__slide--org">
                    <div class="modal__subheader">
                        <a href="#" id="back_org" class="modal__back w-inline-block">
                            <div><strong></strong></div>
                        </a>
                        <h5>Organizations</h5>
                    </div>
                    <div class="modal__block">
                        <div class="menu__title">
                            <h6>Linked</h6>
                        </div>
                        <div class="w-dyn-list">
                            <div role="list" class="connected__list w-dyn-items">
                                <div role="listitem" class="connected__item w-dyn-item">
                                    <a href="#" class="w-inline-block">
                                        <div class="linked__avatar w-embed"><img class="lazy item__img" style="max-width: 80%" data-src=""></div>
                                    </a>
                                    <a href="#" class="link link--name w-inline-block">
                                        <div class="team__info">
                                            <h6></h6>
                                        </div>
                                    </a>
                                    <a href="#" class="link link--adminremove w-inline-block">
                                        <div>unlink</div>
                                    </a>
                                </div>
                            </div>
                            <div class="empty__item w-dyn-empty">
                                <div>No items found.</div>
                            </div>
                        </div>
                        <div class="menu__title">
                            <h6>Team</h6>
                        </div>
                        <div class="team">
                            <div class="w-dyn-list">
                                <div role="list" class="team__list w-dyn-items">
                                    <div role="listitem" class="team__item w-dyn-item">
                                        <div class="team__avatar"></div>
                                        <div class="team__info">
                                            <div class="team__name">
                                                <div></div>
                                            </div>
                                            <div class="team__role">
                                                <div>active</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="empty__item w-dyn-empty">
                                    <div>No items found.</div>
                                </div>
                            </div>
                        </div>
                        <div class="menu__title">
                            <h6>Add an Organization</h6>
                            <a href="apply.html" class="link link--team w-inline-block">
                                <div>request access</div>
                            </a>
                        </div>
                        <div class="activate">
                            <div class="activate__icon">
                                <div><strong></strong></div>
                            </div>
                            <div class="activate__code w-embed"><input type="text" class="activate__input" autocomplete="off" maxlength="1" name="verifyCode1">
                                <input type="text" class="activate__input" autocomplete="off" maxlength="1" name="verifyCode2">
                                <input type="text" class="activate__input" autocomplete="off" maxlength="1" name="verifyCode3">
                                <input type="text" class="activate__input" autocomplete="off" maxlength="1" name="verifyCode4">
                                <input type="text" class="activate__input" autocomplete="off" maxlength="1" name="verifyCode5">
                            </div>
                            <a href="#" data-animate="ripple" class="btn btn--activate w-button">Activate</a>
                        </div>
                    </div>
                    <div class="modal__footer"></div>
                </div>
            </div>
            <div data-id="notify" class="modal modal--activity">
                <div class="modal__slide modal__slide--activity">
                    <div class="modal__subheader modal__subheader--noback">
                        <h5>Activity</h5>
                        <a id="open_follow" href="#" class="modal__more ripple w-inline-block">
                            <div><strong></strong></div>
                        </a>
                    </div>
                    <div id="activity_list" data-scroll="vertical" class="activity">
                        <div class="activity__controls">
                            <a href="#" class="mark mark--feed w-button">Mark as read</a>
                            <a id="open_push" href="#" class="modal__more w-inline-block">
                                <div><strong></strong></div>
                            </a>
                        </div>
                        <ul role="list" class="activity__list w-list-unstyled">
                            <li data-notify="feed" class="activity__item">
                                <div class="activity__left">
                                    <div class="avatar">
                                        <div class="avatar__block avatar__block--activity"><img src="images/camera.svg" alt=""></div>
                                    </div>
                                    <div class="activity__info">
                                        <a href="#" class="activity__name w-inline-block">
                                            <h5>New Media</h5>
                                        </a>
                                        <div class="activity__sub">
                                            <div>Alter Eco - Baseball Bats</div>
                                        </div>
                                        <div class="time">
                                            <div>23h ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div data-select="none" class="activity__right">
                                    <div data-status="unread" class="activity__checkbox w-embed">
                                        <div class="mail__icon"></div>
                                    </div>
                                    <a data-status="unread" href="#" class="activity__remove w-button"></a>
                                </div>
                            </li>
                            <li data-notify="feed" class="activity__item">
                                <div class="activity__left">
                                    <div class="avatar">
                                        <div class="avatar__block avatar__block--activity"><img src="images/download.svg" alt=""></div>
                                    </div>
                                    <div class="activity__info">
                                        <a href="#" class="activity__name w-inline-block">
                                            <h5>Tax Slip</h5>
                                        </a>
                                        <div class="activity__sub">
                                            <div>Pandy</div>
                                        </div>
                                        <div class="activity__type">
                                            <div>$45 Donation</div>
                                        </div>
                                        <div class="time">
                                            <div>23h ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="activity__right">
                                    <div data-status="unread" class="activity__checkbox w-embed">
                                        <div class="mail__icon"></div>
                                    </div>
                                    <a data-status="unread" href="#" class="activity__remove w-button"></a>
                                </div>
                            </li>
                            <li data-notify="feed" class="activity__item">
                                <div class="activity__left">
                                    <div class="avatar">
                                        <div class="avatar__block avatar__block--activity"><img src="images/camera.svg" alt=""></div>
                                    </div>
                                    <div class="activity__info">
                                        <a href="#" class="activity__name w-inline-block">
                                            <h5>New Media</h5>
                                        </a>
                                        <div class="activity__sub">
                                            <div>Tree Frog - Running Shoes</div>
                                        </div>
                                        <div class="time">
                                            <div>23h ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="activity__right">
                                    <div data-status="unread" class="activity__checkbox w-embed">
                                        <div class="mail__icon"></div>
                                    </div>
                                    <a data-status="unread" href="#" class="activity__remove w-button"></a>
                                </div>
                            </li>
                            <li data-notify="feed" class="activity__item">
                                <div class="activity__left">
                                    <div class="avatar">
                                        <div class="avatar__block avatar__block--activity"><img src="images/download.svg" alt=""></div>
                                    </div>
                                    <div class="activity__info">
                                        <a href="#" class="activity__name w-inline-block">
                                            <h5>Tax Slip</h5>
                                        </a>
                                        <div class="activity__sub">
                                            <div>Alter Eco</div>
                                        </div>
                                        <div class="activity__type">
                                            <div>6 Running Shoes</div>
                                        </div>
                                        <div class="time">
                                            <div>23h ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="activity__right">
                                    <div data-status="unread" class="activity__checkbox w-embed">
                                        <div class="mail__icon"></div>
                                    </div>
                                    <a data-status="unread" href="#" class="activity__remove w-button"></a>
                                </div>
                            </li>
                        </ul>
                        <div class="w-dyn-list">
                            <div role="list" class="activity__list w-dyn-items">
                                <div data-notify="feed" role="listitem" class="activity__item w-dyn-item">
                                    <div class="activity__left">
                                        <div class="avatar">
                                            <div class="avatar__block avatar__block--item">
                                                <div class="w-embed"><img class="lazy lazy--notify" data-src=""></div>
                                            </div>
                                        </div>
                                        <div class="activity__info">
                                            <a href="#" class="activity__name w-inline-block">
                                                <div></div>
                                            </a>
                                            <div class="activity__sub"></div>
                                            <div class="activity__title">
                                                <div>100% Funded</div>
                                            </div>
                                            <div class="price price--notify">
                                                <div>$</div>
                                                <div></div>
                                            </div>
                                            <div class="time">
                                                <div>1h ago</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="activity__right">
                                        <div data-status="unread" class="activity__checkbox w-embed">
                                            <div class="mail__icon"></div>
                                        </div>
                                        <a data-status="unread" href="#" class="activity__remove w-button"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="w-dyn-empty">
                                <div>No items found.</div>
                            </div>
                        </div>
                        <div class="w-dyn-list">
                            <div role="list" class="activity__list w-dyn-items">
                                <div data-notify="feed" role="listitem" class="activity__item w-dyn-item">
                                    <div class="activity__left">
                                        <div class="avatar">
                                            <div class="avatar__block avatar__block--milestone">
                                                <div class="follow__icon"><img src="" alt=""></div>
                                            </div>
                                        </div>
                                        <div class="activity__info">
                                            <a href="#" class="activity__name w-inline-block">
                                                <h5></h5>
                                            </a>
                                            <div class="activity__milestone">
                                                <div>90% Funded!</div>
                                            </div>
                                            <div class="time">
                                                <div>1h ago</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="activity__right">
                                        <div data-status="unread" class="activity__checkbox w-embed">
                                            <div class="mail__icon"></div>
                                        </div>
                                        <a data-status="unread" href="#" class="activity__remove w-button"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="empty__item w-dyn-empty">
                                <div>No items found.</div>
                            </div>
                        </div>
                    </div>
                    <div class="empty empty--feed">
                        <div class="empty__block empty__block--main">
                            <div class="empty__icon">
                                <div class="empty__circle empty__circle--xsmall"><img src="images/mute.svg" alt=""></div>
                            </div>
                            <h6>You&#x27;re all caught up!</h6>
                        </div>
                    </div>
                </div>
                <div class="modal__slide modal__slide--follow">
                    <div data-select="none" class="modal__subheader">
                        <a href="#" id="back_follow" class="modal__back w-inline-block">
                            <div><strong></strong></div>
                        </a>
                        <h5>Following</h5>
                    </div>
                    <div id="notify_list" data-scroll="vertical" class="activity">
                        <div class="w-dyn-list">
                            <div role="list" class="watch__list w-dyn-items">
                                <div role="listitem" class="watch__item w-dyn-item">
                                    <a href="#" class="watch__thumb w-inline-block"><img src="" alt="" class="watch__avatar"></a>
                                    <div class="watch__left">
                                        <h5></h5>
                                        <div data-status="unread" data-select="none" class="watch__checkbox w-embed">
                                            <div class="notify__icon"></div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn--unfollow ripple w-button">unfollow</a>
                                </div>
                            </div>
                            <div class="empty__item w-dyn-empty">
                                <div>No items found.</div>
                            </div>
                        </div>
                        <div class="w-dyn-list">
                            <div role="list" class="watch__list w-dyn-items">
                                <div role="listitem" class="watch__item w-dyn-item">
                                    <a href="#" class="watch__thumb follow__thumb--color w-inline-block">
                                        <div class="follow__icon"><img src="" alt=""></div>
                                    </a>
                                    <div class="watch__left">
                                        <h5></h5>
                                        <div data-status="unread" class="watch__checkbox w-embed">
                                            <div class="notify__icon"></div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn--unfollow ripple w-button">Unfollow</a>
                                </div>
                            </div>
                            <div class="empty__item w-dyn-empty">
                                <div>No items found.</div>
                            </div>
                        </div>
                    </div>
                    <div class="empty empty--notify">
                        <div class="empty__block empty__block--main">
                            <div class="empty__icon">
                                <div class="empty__circle empty__circle--xsmall"><img src="images/interface.svg" alt=""></div>
                            </div>
                            <h6>You&#x27;re not following anything.</h6>
                        </div>
                    </div>
                </div>
                <div class="modal__slide modal__slide--push">
                    <div class="modal__subheader">
                        <a href="#" id="back_push" class="modal__back w-inline-block">
                            <div><strong></strong></div>
                        </a>
                        <h5>Notification Settings</h5>
                    </div>
                    <div data-scroll="vertical" class="menu menu--push">
                        <div class="menu__title">
                            <h6>Push Notifications</h6>
                            <div class="menu__subtext"></div>
                        </div>
                        <div class="menu__option">
                            <div>Turn <strong class="account__bold">OFF</strong> all notifications</div>
                            <div class="menu__toggle">
                                <div class="w-embed">
                                    <div class="ios__toggle">
                                        <input type="checkbox" id="uncheck_activity" class="ios__check">
                                        <b class="ios__switch"></b>
                                        <b class="ios__track"></b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="check_notify">
                            <div class="menu__option">
                                <div>Status updates on your purchases</div>
                                <div class="menu__toggle">
                                    <div class="w-embed">
                                        <div class="ios__toggle">
                                            <div class="disabled"></div>
                                            <input type="checkbox" class="ios__check">
                                            <b class="ios__switch"></b>
                                            <b class="ios__track"></b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu__option">
                                <div>When new items are posted</div>
                                <div class="menu__toggle">
                                    <div class="w-embed">
                                        <div class="ios__toggle">
                                            <div class="disabled"></div>
                                            <input type="checkbox" checked="" class="ios__check">
                                            <b class="ios__switch"></b>
                                            <b class="ios__track"></b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu__option">
                                <div>Milestones (funding, donations)</div>
                                <div class="menu__toggle">
                                    <div class="w-embed">
                                        <div class="ios__toggle">
                                            <div class="disabled"></div>
                                            <input type="checkbox" checked="" class="ios__check">
                                            <b class="ios__switch"></b>
                                            <b class="ios__track"></b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu__title">
                                <h6>Organizations</h6>
                            </div>
                            <div class="menu__option">
                                <div>When new items are posted</div>
                                <div class="menu__toggle">
                                    <div class="w-embed">
                                        <div class="ios__toggle">
                                            <div class="disabled"></div>
                                            <input type="checkbox" class="ios__check">
                                            <b class="ios__switch"></b>
                                            <b class="ios__track"></b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu__option">
                                <div>Changes to Profile</div>
                                <div class="menu__toggle">
                                    <div class="w-embed">
                                        <div class="ios__toggle">
                                            <div class="disabled"></div>
                                            <input type="checkbox" checked="" class="ios__check">
                                            <b class="ios__switch"></b>
                                            <b class="ios__track"></b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu__title">
                                <h6>Projects</h6>
                            </div>
                            <div class="menu__option">
                                <div>When new items are posted</div>
                                <div class="menu__toggle">
                                    <div class="w-embed">
                                        <div class="ios__toggle">
                                            <div class="disabled"></div>
                                            <input type="checkbox" checked="" class="ios__check">
                                            <b class="ios__switch"></b>
                                            <b class="ios__track"></b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu__option">
                                <div>When the project is fully funded</div>
                                <div class="menu__toggle">
                                    <div class="w-embed">
                                        <div class="ios__toggle">
                                            <div class="disabled"></div>
                                            <input type="checkbox" checked="" class="ios__check">
                                            <b class="ios__switch"></b>
                                            <b class="ios__track"></b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal__footer"></div>
            </div>
            <div class="css-bank">
                <div class="css-code-input w-embed">
                    <style>
                        .activate__input {
                            outline: none;
                            width: 20px;
                            height: 20px;
                            font-size: 16px;
                            line-height: normal;
                            border: 0px solid #B9C6D4;
                            border-bottom: 1px solid #B9C6D4;
                            padding-top: 0;
                            padding-bottom: 0;
                            margin-right: 8px;
                            margin-left: 0;
                            text-align: center;
                            text-transform: uppercase;
                            box-shadow: none;
                            transition: all .2s ease-out;
                        }
                    </style>
                </div>
                <div class="css-icons w-embed">
                    <style>
                        .bell__icon,
                        .trash__icon,
                        .mail__icon,
                        .checkout__icon{
                            font-family: 'Font awesome 5 pro solid 900',sans-serif;
                        }
                        .remove__icon,
                        .mail__icon{
                            height: 35px;
                            width: 35px;
                            display: flex;
                            align-items: center;
                            justify-content: center
                        }
                        @media (max-width: 479px) {
                            .remove__icon {
                                font-size: 16px
                            }
                            .mail__icon{
                                font-size: 14px
                            }
                        }
                        .edit__icon {
                            font-family: 'Font awesome 5 pro 400',sans-serif;
                        }
                    </style>
                </div>
                <div class="css-ios-toggles w-embed">
                    <style>
                        .ios__toggle {
                            position: relative;
                            width: 50px;
                            height: 30px;
                            border-radius: 100px;
                            overflow: hidden;
                            box-shadow: inset 0 0 2px 1px rgba(0,0,0,.05);
                        }
                        .ios__check {
                            position: absolute;
                            display: block;
                            cursor: pointer;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            opacity: 0;
                            z-index: 6;
                        }
                        .ios__check:checked ~ .ios__track {
                            box-shadow: inset 0 0 0 20px #4bd863;
                        }
                        .ios__check:checked ~ .ios__switch {
                            right: 2px;
                            left: 22px;
                            transition: transform .25s cubic-bezier(0.785, 0.135, 0.150, 0.860);
                            transition-property: left, right;
                        }
                        .ios__switch {
                            position: absolute;
                            left: 2px;
                            top: 2px;
                            bottom: 2px;
                            right: 22px;
                            background-color: #fff;
                            border-radius: 36px;
                            z-index: 1;
                            transition: transform .25s cubic-bezier(0.785, 0.135, 0.150, 0.860);
                            transition-property: left, right;
                            box-shadow: 0 1px 2px rgba(0,0,0,.2);
                        }
                        .ios__toggle--icon .ios__switch {
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            font-family: 'Font awesome 5 pro 300',sans-serif;
                        }
                        .ios__track {
                            position: absolute;
                            left: 0;
                            top: 0;
                            right: 0;
                            bottom: 0;
                            transition: transform .25s cubic-bezier(0.785, 0.135, 0.150, 0.860);
                            /*box-shadow: inset 0 0 0 2px rgba(0,0,0,.025);*/
                            border-radius: 40px;
                        }
                    </style>
                </div>
                <div class="css-mailbox w-embed">
                    <style>
                        .fadeout {
                            opacity: 0
                        }
                        .activity__checkbox.activity__checkbox--user.w-embed.activity__checkbox--read {
                            color: silver;
                        }
                        .activity__checkbox--read .mail__icon {
                            font-family: 'Font awesome 5 pro 400',sans-serif;
                        }
                    </style>
                </div>
                <div class="css-modal w-embed">
                    <style>
                        .lazy--notify {
                            max-height: 38px
                        }
                        .modal.modal--admin {
                            -webkit-transform-origin: top;
                            -ms-transform-origin: top;
                            transform-origin: top;
                        }
                        .modal {
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            opacity: 0;
                            height: 0;
                            visibility: hidden;
                            -webkit-transform: scale(0.5);
                            -ms-transform: scale(0.5);
                            transform: scale(0.5);
                            -webkit-transition: 0.15s;
                            -o-transition: 0.15s;
                            transition: 0.15s;
                            z-index: 99999999;
                        }
                        .modal.active {
                            display: flex;
                            overflow: inherit;
                            opacity: 1;
                            flex: 1;
                            height: auto;
                            visibility: visible;
                            -webkit-transform: scale(1);
                            -ms-transform: scale(1);
                            transform: scale(1);
                        }
                        .modal.active:after {
                            opacity: 1;
                            visibility: visible;
                            -webkit-transform: rotate(45deg) scale(1);
                            -ms-transform: rotate(45deg) scale(1);
                            transform: rotate(45deg) scale(1);
                        }
                        .modal:after {
                            content: "";
                            width: 15px;
                            height: 15px;
                            position: absolute;
                            top: -6px;
                            right: 29px;
                            opacity: 0;
                            visibility: hidden;
                            -webkit-transform: rotate(45deg) scale(0.5);
                            -ms-transform: rotate(45deg) scale(0.5);
                            transform: rotate(45deg) scale(0.5);
                        }
                        .modal.modal--cart:after {
                            right: 113px;
                        }
                        .modal.notify-modal:after {
                            left: 40px;
                        }
                        .modal.modal--admin:after,
                        .modal.modal--activity:after {
                            right: 76px;
                        }
                        .modal.modal--profile:after {
                            right: 72px;
                        }
                        .modal.modal--more:after {
                            right: 43px;
                        }
                        .modal.modal--options:after {
                            right: 6px;
                        }
                        .modal.modal--qrab:after {
                            background: #f9f9f9;
                        }
                        .modal.modal--filters:after {
                            left: 33px;
                            width: 26px;
                            top: -9px;
                            height: 26px;
                        }
                        .modal.modal--regions:after {
                            top: -9px;
                            right: 53px;
                            background: #ffffff;
                        }
                        .modal.modal--popover:after,
                        .modal.modal--history:after {
                            bottom: -6px;
                            top: auto;
                            left: 56px;
                        }
                        .modal.modal--history:after {
                            left: 60px !important;
                        }
                        .modal.modal--boost:after {
                            bottom: -6px;
                            top: auto;
                            right: 60px;
                        }
                        @media (max-width: 479px) {
                            .modal {
                                width: 85%;
                            }
                            .modal:after {
                                right: 09px;
                            }
                            .modal.modal--cart:after {
                                right: 93px;
                            }
                            .modal.notify-modal:after {
                                left: 20px;
                            }
                            .modal.modal--admin:after,
                            .modal.modal--activity:after {
                                right: 56px;
                            }
                            .modal.modal--more:after {
                                right: 23px;
                            }
                            .modal.modal--profile:after {
                                right: 190px;
                            }
                            .modal.modal--qrab:after,
                            .modal.modal--filters:after {
                                display: none;
                            }
                        }
                    </style>
                </div>
                <div class="css-notifications w-embed">
                    <style>
                        .indicator {
                            transform: scale(1);
                            transition: all 50ms ease-in-out;
                        }
                        .indicator.scale-in {
                            transform: scale(0);
                        }
                        .activity {
                            min-height: 250px;
                            display: flex;
                            flex-direction: column
                        }
                        .activity__button svg {
                            color: #f8971d;
                        }
                        .activity__button.activity__button--read svg{
                            color: #47a877;
                        }
                        /*.disabled {
display: none;
	background: #ffffff94;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 99
  }*/
                        .watch__button--read {
                            color: rgb(111 111 144 / 24%);
                            font-family: 'Font awesome 5 pro 300',sans-serif;
                        }
                    </style>
                </div>
                <div class="css-placeholders w-embed">
                    <style>
                        ::-webkit-input-placeholder {
                            font-size: 12px;
                            font-weight: 400;
                        }
                        ::-moz-placeholder {
                            font-size: 12px;
                            font-weight: 400;
                        }
                        :-ms-input-placeholder {
                            font-size: 12px;
                            font-weight: 400;
                        }
                        :-moz-placeholder {
                            font-size: 12px;
                            font-weight: 400;
                        }
                        input:focus::-webkit-input-placeholder { color:transparent; }
                        input:focus:-moz-placeholder { color:transparent; } /* FF 4-18 */
                        input:focus::-moz-placeholder { color:transparent; } /* FF 19+ */
                        input:focus:-ms-input-placeholder { color:transparent; } /* IE 10+ */
                    </style>
                </div>
                <div class="css-post-styles w-embed">
                    <style>
                        .post__columns {
                            background: var(--bkg-item-mid)
                        }
                    </style>
                </div>
                <div class="css-tagboxes w-embed">
                    <style>
                        [data-type="tagbox"] input {
                            display: none;
                        }
                        [data-type="tagbox"] label {
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            font-size: 12px;
                            -webkit-box-align: center;
                            -ms-flex-align: center;
                            align-items: center;
                            letter-spacing: -0.2px;
                            padding: 4px 0;
                            font-weight: 600;
                            -webkit-user-select: none;
                            -moz-user-select: none;
                            -ms-user-select: none;
                            user-select: none;
                            cursor: pointer;
                        }
                        [data-type="tagbox"] {
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            -webkit-box-align: center;
                            -ms-flex-align: center;
                            align-items: center;
                            min-width: 60px;
                            -webkit-box-flex: 0;
                            -ms-flex: 0;
                            flex: 0;
                            -webkit-box-pack: center;
                            -ms-flex-pack: center;
                            justify-content: center;
                            border-radius: 6px;
                            margin: 0.3rem;
                            -webkit-transition: 0.1s ease-in-out;
                            -o-transition: 0.1s ease-in-out;
                            transition: 0.1s ease-in-out;
                        }
                        .tagbox__menu {
                            padding-left: 0px;
                            padding-right: 0px;
                        }
                        .tagbox__text {
                            margin: 0 6px;
                        }
                        .tagbox__cancel {
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            -webkit-box-align: center;
                            -ms-flex-align: center;
                            align-items: center;
                            -webkit-box-pack: center;
                            -ms-flex-pack: center;
                            justify-content: center;
                            width: 12px;
                            height: 12px;
                            color: purple;
                            -webkit-transition: all 0.25s ease;
                            -o-transition: all 0.25s ease;
                            transition: all 0.25s ease;
                        }
                        .dot {
                            width: 12px;
                            height: 12px;
                            border-radius: 50%;
                            -webkit-transition: all 0.25s ease;
                            -o-transition: all 0.25s ease;
                            transition: all 0.25s ease;
                        }
                        .dot.off {
                            -webkit-transform: scale(0);
                            -ms-transform: scale(0);
                            transform: scale(0);
                        }
                        .dot.on {
                            -webkit-transform: scale(1);
                            -ms-transform: scale(1);
                            transform: scale(1);
                        }
                        .dot.off,
                        .tagbox__cancel.off {
                            width: 0px;
                            height: 0px;
                            opacity: 0;
                        }
                        .dot.on,
                        .tagbox__cancel.on {
                            width: 12px;
                            height: 12px;
                            opacity: 1;
                            margin-right: 9px;
                        }
                        //Mobile Styles
                        @media (max-width: 479px) {
                            [data-type="tagbox"] {
                                padding: 0 !important
                            }
                        }
                    </style>
                </div>
                <div class="css-textarea w-embed">
                    <style>
                        .char-textarea {
                            max-height: 120px; color: #7d7d7d; resize: none; line-height: 1.3rem;
                        }
                    </style>
                </div>
                <div class="css-wishlist w-embed">
                    <style>
                        .wish__item {
                            font-size: 14px;
                            list-style: none;
                            overflow: hidden;
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            min-height: 82px;
                            padding: 12px .9rem 12px 10px;
                            line-height: 1.1rem;
                            border-bottom: 1px solid whitesmoke;
                            -webkit-box-align: stretch;
                            -ms-flex-align: stretch;
                            align-items: stretch;
                        }
                        .wish__name {
                            font-weight: 700;
                        }
                        .wish__name,
                        .wish__value {
                            white-space: pre-wrap;
                            line-height: 1rem;
                        }
                        .wish__icon {
                            cursor: pointer;
                            font-family: 'Font awesome 5 pro 400',sans-serif;
                        }
                        .wish__icon.wish__icon--solid {
                            font-family: 'Font awesome 5 pro solid 900',sans-serif;
                        }
                        .wish__icon.active {
                            color: rgb(246, 100, 97)
                        }
                        .wish__label:hover {
                            color: rgb(246, 100, 97);
                        }
                        @media (hover: none) {
                            .wish__label:hover { color: inherit; }
                        }
                        .wish__input{
                            font-family: 'Font awesome 5 pro regular 400',sans-serif;
                            color: rgb(246, 100, 97)
                        }
                        .wish__remove {
                            display: -webkit-box;
                            display: -ms-flexbox;
                            font-family: 'Font awesome 5 pro solid 900',sans-serif;
                            display: flex;
                            -webkit-box-align: center;
                            -ms-flex-align: center;
                            align-items: center;
                            -webkit-box-pack: center;
                            -ms-flex-pack: center;
                            justify-content: center;
                            min-width: 75px;
                            font-size: 20px;
                            color: rgb(246, 100, 97);
                        }
                        .wish__btn {
                            position: relative;
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            font-size: 19px;
                        }
                        .wish__label,
                        .wish__btn label,
                        .wish__html label {
                            position: relative;
                            cursor: pointer;
                        }
                        .wish__label input,
                        .wish__html input,
                        .wish__btn input {
                            position: absolute;
                            opacity: 0;
                            width: 100%;
                            height: 100%;
                            cursor: pointer;
                            z-index: 9;
                            top: 0;
                            left: 0;
                            right: 0;
                            bottom: 0;
                        }
                        .wish__info {
                            -webkit-box-flex: 1;
                            padding: .9rem 0;
                            -ms-flex: 1;
                            flex: 1;
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            -webkit-box-orient: vertical;
                            -webkit-box-direction: normal;
                            -ms-flex-direction: column;
                            flex-direction: column;
                            -webkit-box-pack: center;
                            -ms-flex-pack: center;
                            justify-content: center;
                        }
                        .wish__thumb {
                            width: 60px;
                            height: 60px;
                            border-radius: 9px;
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            margin: 9px;
                            -webkit-box-align: center;
                            -ms-flex-align: center;
                            align-items: center;
                            -webkit-box-pack: center;
                            -ms-flex-pack: center;
                            justify-content: center;
                        }
                        .wish__thumb img {
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            max-width: 45px;
                            max-height: 50px;
                        }
                        .wish__items li {
                            list-style: none;
                        }
                        .wish__list--empty img {
                            width: 100px;
                        }
                        @media (max-width: 479px) {
                            .wish__list--empty {
                                -webkit-box-flex: 1;
                                -ms-flex: 1;
                                flex: 1;
                            }
                            .wish__sub-body {
                                max-height: none
                            }
                        }
                    </style>
                </div>
            </div>
            <div class="js-bank">
                <div class="js-card-calc w-embed w-script">
                    <script>
                        $(document).ready(function() {
//Calculate new total when the quantity changes.
                            function CalcPrice (qty){
                                var price = $(".product-price").attr("price-data");
                                var qty = $("#product-quantity-input").val();
                                var total = parseFloat((price * qty)).toFixed(2);
                                $(".product-checkout-total-amount").text(total);
                            }
                            CalcPrice();
//Reduce quantity by 1 if clicked
                            $(document).on("click", ".product-quantity-subtract", function(e){
                                var value = $("#product-quantity-input").val();
                                //console.log(value);
                                var newValue = parseInt(value) - 1;
                                if(newValue < 0) newValue=0;
                                $("#product-quantity-input").val(newValue);
                                CalcPrice(newValue);
                            });
//Increase quantity by 1 if clicked
                            $(document).on("click", ".product-quantity-add", function(e){
                                var value = $("#product-quantity-input").val();
                                //console.log(value);
                                var newValue = parseInt(value) + 1;
                                $("#product-quantity-input").val(newValue);
                                CalcPrice(newValue);
                            });
                            $(document).on("blur", "#product-quantity-input", function(e){
                                var value = $("#product-quantity-input").val();
                                //console.log(value);
                                CalcPrice(value);
                            });
                        });
                    </script>
                </div>
                <div class="js-following w-embed w-script">
                    <script>
                        $(document).ready(function () {
                            var hideEmpty = function () {
                                $(".empty--notify").hide();
                            };
                            var showEmpty = function () {
                                $(".empty--notify").show();
                            };
                            var ToggleShowHideEmpty = function () {
                                if ($("#notify_list .watch__item").length < 1) {
                                    showEmpty();
                                } else {
                                    hideEmpty();
                                }
                            };
                            var bell = "";
                            var slash = "";
                            var following = function () {
                                $(".watch__checkbox[data-status]")
                                    .off()
                                    .on("click", function () {
                                        var status = $(this).attr("data-status");
                                        if (status == "unread") {
                                            $(this)
                                                .attr("data-status", "read")
                                                .empty()
                                                .html('<div class="notify__icon"> ' + slash + " </div>")
                                                .css("font-family", '"Font awesome 5 pro 300",sans-serif')
                                                .css("font-family", "")
                                                .addClass("watch__button--read");
                                        } else {
                                            $(this)
                                                .attr("data-status", "unread")
                                                .empty()
                                                .html('<div class="notify__icon"> ' + bell + " </div>")
                                                .css("font-family", '"Font awesome 5 pro solid 900",sans-serif')
                                                .removeClass("watch__button--read");
                                        }
                                    });
                                $(".btn--unfollow").on("click", function () {
                                    var item = $(this).closest(".watch__item");
                                    item.animate({ opacity: "0" }, 150, function () {
                                        item.animate({ height: "0px" }, 150, function () {
                                            item.remove();
                                            ToggleShowHideEmpty();
                                        });
                                    });
                                });
                                /*$(".mark")
      .off()
      .on("click", function() {
        var status = $(this).attr("data-status");
        if (!status || status == "unread") {
          $(this)
            .html("Mark all unread")
            .attr("data-status", "read");
          $(".activity__button[data-status]").each(function() {
            $(this)
              .attr("data-status", "read")
              .empty()
              .html('<div class="notify__icon"> '+ open +' </div>')
              .addClass("follow__checkbox");
            $(this)
              .closest(".activity__item")
              .addClass("activity__item--read");
          });
        } else {
          $(this)
            .html("Mark all read")
            .attr("data-status", "unread");
          $(".activity__button[data-status]").each(function() {
            $(this)
              .attr("data-status", "unread")
              .empty()
              .html('<div class="notify__icon"> '+ close +' </div>')
              .removeClass("activity__button--read");
            $(this)
              .closest(".activity__item")
              .removeClass("activity__item--read");
          });
        }
        updateNotificationIcon();
      });*/
                            };
                            var toggleActive = function () {
                                $(this).toggleClass("active");
                            };
                            $(".watch__checkbox").click(following);
                            $(".watch__item").each(function (i, e) {
                                var button = $(this).find(".watch__checkbox");
                                ranNum = Math.floor(Math.random() * (4 - 2 + 2)) + 1;
                                if ((i + 1) % ranNum == 0) {
                                    following.call(button);
                                    $(this).find(".watch__checkbox").click();
                                }
                            });
                        });
                    </script>
                </div>
                <div class="js-random-activity-feed w-embed w-script">
                    <script>
                        jQuery.fn.shuffle = function () {
                            var j;
                            for (var i = 0; i < this.length; i++) {
                                j = Math.floor(Math.random() * this.length);
                                $(this[i]).before($(this[j]));
                            }
                            return this;
                        };
                        $.fn.randomize = function(selector) {
                            (selector ? this.find(selector) : this).parent().each(function() {
                                $(this)
                                    .children(selector)
                                    .sort(function() {
                                        return Math.random() - 0.5;
                                    })
                                    .detach()
                                    .appendTo($(this).closest(".modal__slide--activity").find("[data-scroll='vertical']"));
                            });
                            return this;
                        };
                        $("#activity_list .activity__item").randomize();
                        $("#activity_list .activity__item").shuffle();
                    </script>
                </div>
                <div class="js-mailbox w-embed w-script">
                    <script>
                        $(document).ready(function () {
                            var hideEmpty = function () {
                                $(".activity").css("display", "flex");
                                $(".empty--feed").hide();
                                $(".mark--feed").show();
                            };
                            var showEmpty = function () {
                                $(".activity").css("display", "none");
                                $(".empty--feed").show();
                                $(".mark--feed").hide();
                            };
                            var ToggleShowHideEmpty = function () {
                                if ($("#activity_list [data-notify='feed']").length < 1) {
                                    showEmpty();
                                } else {
                                    hideEmpty();
                                }
                            };
                            function updateNotificationIcon() {
                                var notify = $(".indicator");
                                var $activity_items = $(".activity__checkbox[data-status]"),
                                    all_read = true;
                                // Loop through each .activity__item
                                $activity_items.each(function () {
                                    // If item does NOT have the "read" class, set all_read to false
                                    if (!$(this).hasClass("activity__checkbox--read")) {
                                        all_read = false;
                                    }
                                });
                                if (all_read) {
                                    $(".mark--feed").attr("data-status", "read");
                                    $(".mark--feed").html("Mark all unread");
                                    notify.addClass("scale-in");
                                } else {
                                    $(".mark--feed").attr("data-status", "unread");
                                    $(".mark--feed").html("Mark all read");
                                    notify.removeClass("scale-in");
                                }
                            }
                            $(".activity__remove").on("click", function () {
                                var item = $(this).closest(".activity__item");
                                var button = $(this)
                                    .closest(".activity__item")
                                    .find(".activity__checkbox[data-status]");
                                button.addClass("activity__checkbox--read");
                                item.addClass("activity__item--read");
                                button.attr("data-status", "read");
                                item.animate({ opacity: "0" }, 150, function () {
                                    item.animate({ height: "0px" }, 150, function () {
                                        item.remove();
                                        ToggleShowHideEmpty();
                                    });
                                });
                                updateNotificationIcon();
                            });
                            var open = "";
                            var close = "";
                            var bigActive = function () {
                                $(".activity__checkbox[data-status]")
                                    .off()
                                    .on("click", function () {
                                        var status = $(this).attr("data-status");
                                        if (status == "unread") {
                                            $(this)
                                                .attr("data-status", "read")
                                                .empty()
                                                .html('<div class="mail__icon"> ' + open + " </div>")
                                                .addClass("activity__checkbox--read");
                                            $(this)
                                                .closest("[data-notify='feed']")
                                                .addClass("activity__item--read");
                                        } else {
                                            $(this)
                                                .attr("data-status", "unread")
                                                .empty()
                                                .html('<div class="mail__icon"> ' + close + " </div>")
                                                .removeClass("activity__checkbox--read");
                                            $(this)
                                                .closest("[data-notify='feed']")
                                                .removeClass("activity__item--read");
                                        }
                                        updateNotificationIcon();
                                    });
                                $(".mark--feed")
                                    .off()
                                    .on("click", function () {
                                        var status = $(this).attr("data-status");
                                        if (!status || status == "unread") {
                                            $(this).html("Mark all unread").attr("data-status", "read");
                                            $(".activity__checkbox[data-status]").each(function () {
                                                $(this)
                                                    .attr("data-status", "read")
                                                    .empty()
                                                    .html('<div class="mail__icon"> ' + open + " </div>")
                                                    .addClass("activity__checkbox--read");
                                                $(this)
                                                    .closest("[data-notify='feed']")
                                                    .addClass("activity__item--read");
                                            });
                                        } else {
                                            $(this).html("Mark all read").attr("data-status", "unread");
                                            $(".activity__checkbox[data-status]").each(function () {
                                                $(this)
                                                    .attr("data-status", "unread")
                                                    .empty()
                                                    .html('<div class="mail__icon"> ' + close + " </div>")
                                                    .removeClass("activity__checkbox--read");
                                                $(this)
                                                    .closest("[data-notify='feed']")
                                                    .removeClass("activity__item--read");
                                            });
                                        }
                                        updateNotificationIcon();
                                    });
                            };
                            var toggleActive = function () {
                                $(this).toggleClass("active");
                            };
                            $(".activity__checkbox").click(bigActive);
                            $("[data-notify='feed']").each(function (i, e) {
                                var button = $(this).find(".activity__checkbox");
                                ranNum = Math.floor(Math.random() * (4 - 2 + 2)) + 1;
                                if ((i + 1) % ranNum == 0) {
                                    bigActive.call(button);
                                    $(this).find(".activity__checkbox").click();
                                }
                            });
                        });
                    </script>
                </div>
                <div class="js-uncheckall w-embed w-script">
                    <script>
                        $(document).ready(function () {
                            $("#uncheck_notify, #uncheck_activity").on("change", function () {
                                if (!$(this).prop("checked")) {
                                    $("#check_notify input[type=checkbox], #check_activity input[type=checkbox]").each(function (index, elem) {
                                        var input = $(elem);
                                        input.prop("checked", input.data("was-checked"));
                                        input.prop("disabled", false);
                                    });
                                } else {
                                    $("#check_notify input[type=checkbox], #check_activity input[type=checkbox]").each(function (index, elem) {
                                        var input = $(elem);
                                        input.data("was-checked", input.prop("checked"));
                                        input.prop("checked", false);
                                        input.prop("disabled", true);
                                    });
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
        <div class="sticky">
            <div data-id="cart" class="modal modal--cart">
                <div class="modal__slide modal__slide--cart">
                    <div class="modal__header">
                        <h5>Cart</h5>
                    </div>
                    <ul data-scroll="vertical" role="list" class="cart__list w-list-unstyled"></ul>
                    <div data-empty="cart" class="empty__block">
                        <div class="empty__icon">
                            <div class="empty__circle empty__circle--xsmall"><img src="images/bag.svg" alt=""></div>
                        </div>
                        <h6>No items in cart.</h6>
                    </div>
                    <div class="cart__controls">
                        <div class="cart__value w-embed"><span>Total:</span>
                            <span class="cart__total"></span>
                        </div>
                        <a href="checkout.html" class="btn btn--checkout ripple w-button">Checkout</a>
                    </div>
                    <div class="modal__footer"></div>
                </div>
            </div>
            <div class="css-bank">
                <div class="css-progress-sliders w-embed">
                    <style>
                        /* Main Progress Bar Container */
                        .progress__slider {
                            position: relative;
                            display: block;
                            height: 10px;
                            overflow: hidden;
                            border-radius: 4px;
                            background: #E6E7E8;
                        }
                        .progress__bar {
                            position: absolute;
                            display: block;
                            height: 100%;
                            background: #3cd3ad;
                            border-radius: 4px;
                            /* jQuery uses the .progress-bar data-percentage attribute to modify the .bar width property */
                            width: 0%;
                        }
                        /* Set Label Properties*/
                        .progress__slider--label {
                            position: absolute;
                            display: block;
                            padding: 0px 10px;
                            height: 30px;
                            line-height: 30px;
                            top: 20px;
                            background: #ccc;
                            font-size: 12px;
                            font-family: sans-serif;
                            text-align: center;
                            color: #fff;
                            border-radius: 6px;
                            white-space: nowrap;
                            opacity: 0;
                        }
                    </style>
                </div>
                <div class="css-cart-items w-embed">
                    <style>
                        .cart__qty > input {
                            font-family: 'Font awesome 5 pro 400';
                        }
                        .post__count > * {
                            padding: 0 .1rem;
                        }
                        .order__price {
                            color: #69ca9a
                        }
                        span.cart__total {
                            font-size: 16px;
                            color: #5fc996;
                            margin-left: 6px;
                            font-weight: 900;
                        }
                        .wish__title,
                        .cart__location {
                            color: #aaa9c2;
                            font-weight: 700;
                            font-size: 11px;
                            /* display: none; */
                        }
                        .cart__tally {
                            display: none;
                            height: 19px;
                        }
                        .cart__price {
                            font-weight: 900;
                            font-size: 14px;
                            color: #5fca96;
                        }
                        .cart__price span {
                            display: none;
                        }
                        .cart__title {
                            padding-right: 12px;
                        }
                        .cart__btn {
                            font-family: "Font awesome 5 pro solid 900", sans-serif;
                            font-size: 14px;
                            outline: none;
                        }
                        .cart__label {
                            font-weight: 700;
                        }
                        .cart__input {
                            outline: none;
                            padding: 0.6rem 0;
                            width: 24px;
                            text-align: center;
                        }
                        .cart__change {
                            font-size: 14px;
                        }
                        .cart__change span {
                            display: none;
                        }
                        .cart__qty > input,
                        .cart__remove > input{
                            outline: none;
                        }
                        .cart__change,
                        .cart__qty {
                            font-size: 14px;
                            padding: 0 3px;
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            -webkit-box-align: center;
                            -ms-flex-align: center;
                            align-items: center;
                        }
                        .cart__remove {
                            cursor: pointer;
                            /* padding: 12px; */
                            font-family: "Font awesome 5 pro solid 900", sans-serif;
                            height: 35px;
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            -webkit-box-align: center;
                            -ms-flex-align: center;
                            align-items: center;
                            -webkit-box-pack: center;
                            -ms-flex-pack: center;
                            justify-content: center;
                            min-width: 35px;
                            font-size: 16px;
                            border-radius: 50%;
                        }
                        .cart__remove:hover,
                        .cart__remove:focus {
                            color: red;
                        }
                        .cart__icon {
                            top: 0;
                            height: 70%;
                            width: 100%;
                            padding: 6px;
                            font-weight: 900;
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            left: 0;
                            -webkit-box-align: center;
                            -ms-flex-align: center;
                            align-items: center;
                            -webkit-box-pack: center;
                            -ms-flex-pack: center;
                            justify-content: center;
                            bottom: 0;
                            right: 0;
                            /*font-family: 'Font awesome 5 pro 400',sans-serif;*/
                        }
                        .cart__list {
                            min-height: 200px;
                        }
                        .cart__list li {
                            list-style: none;
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            -webkit-box-align: center;
                            -ms-flex-align: center;
                            align-items: center;
                            padding: 16px .9rem 21px 10px;
                            border-bottom: 1px solid whitesmoke;
                        }
                        .cart__list li:last-child {
                            margin-bottom: 30px;
                        }
                        .cart__list,
                        .wish__list {
                            min-height: 250px;
                            position: relative;
                            overflow: auto;
                            flex: 1;
                        }
                        .item__headline:hover .item__title {
                            text-decoration: underline;
                        }
                        .cart__item {
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            -webkit-box-flex: 1;
                            -ms-flex: 1;
                            flex: 1;
                            line-height: 1.3rem;
                            -webkit-box-align: center;
                            -ms-flex-align: center;
                            align-items: center;
                        }
                        .cart__img {
                            min-width: 60px;
                            height: 60px;
                            border-radius: 9px;
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            margin: 3px;
                            -webkit-box-align: center;
                            -ms-flex-align: center;
                            align-items: center;
                            -webkit-box-pack: center;
                            -ms-flex-pack: center;
                            justify-content: center;
                        }
                        .cart__item img {
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            max-width: 45px;
                            max-height: 75%;
                        }
                        .cart__price,
                        .wish__value {
                            font-weight: 900;
                            font-size: 14px;
                            color: #5fca96;
                        }
                        .cart__icon {
                            width: 50px;
                            min-height: 35px;
                        }
                        .cart__name,
                        .wish__name {
                            font-size: 14px;
                            /* min-width: 60px; */
                            line-height: 1.1rem;
                            font-weight: 900;
                            overflow-wrap: break-word;
                            word-wrap: break-word;
                            -ms-word-break: break-all;
                            word-break: break-word;
                            -ms-hyphens: auto;
                            -webkit-hyphens: auto;
                            hyphens: auto;
                        }
                        .cart__main {
                            padding-left: 12px;
                            -webkit-box-flex: 1;
                            -ms-flex: 1;
                            flex: 1;
                            min-width: 80px;
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            -webkit-box-orient: vertical;
                            -webkit-box-direction: normal;
                            -ms-flex-direction: column;
                            flex-direction: column;
                            -webkit-box-pack: center;
                            -ms-flex-pack: center;
                            justify-content: center;
                        }
                        .cart__right {
                            margin-right: 9px
                        }
                        .cart__left {
                            margin-right: 3px;
                        }
                        .cart__icon.active {
                            color: #fdfdfd;
                            background: #5fc996;
                        }
                        .btn--product.active,
                        .cart__icon.active,
                        .wish__icon.active {
                            font-weight: 900 !important;
                            -webkit-animation: bounce 250ms none;
                            animation: bounce 250ms none;
                            -webkit-animation-timing-function: ease-in-out;
                            animation-timing-function: ease-in-out;
                        }
                        .btn--product.active {
                            font-family: 'Font awesome 5 pro solid 900',sans-serif;
                            background: #5fc996 !important;
                        }
                        @-webkit-keyframes bounce {
                            0% {
                                -webkit-transform: scale(0.9);
                                transform: scale(0.9);
                            }
                            50% {
                                -webkit-transform: scale(1.1);
                                transform: scale(1.2);
                            }
                            100% {
                                -webkit-transform: scale(1);
                                transform: scale(1);
                            }
                        }
                        @keyframes bounce {
                            0% {
                                -webkit-transform: scale(0.9);
                                transform: scale(0.9);
                            }
                            50% {
                                -webkit-transform: scale(1.2);
                                transform: scale(1.2);
                            }
                            100% {
                                -webkit-transform: scale(1);
                                transform: scale(1);
                            }
                        }
                        .post__increment {
                            height: 35px;
                            width: 35px;
                            line-height: 0px;
                            font-family: "Font awesome 5 pro solid 900", sans-serif;
                            font-size: 16px;
                            outline: none;
                            cursor: pointer;
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            /* background: #f3f3fb; */
                            border-radius: 6px;
                            position: relative;
                            -webkit-box-align: center;
                            -ms-flex-align: center;
                            align-items: center;
                            color: #9695a5;
                            -webkit-box-pack: center;
                            -ms-flex-pack: center;
                            justify-content: center;
                        }
                        .post__increment input {
                            height: 20px;
                            width: 20px;
                            position: absolute;
                        }
                        .post__increment svg {
                            width: 20px !important;
                        }
                        .qty {
                            width: 30px;
                            text-align: center;
                            font-size: 14px;
                            border: 0;
                            max-width: 25px;
                            padding: 7px 0;
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            text-align: center;
                            -webkit-box-align: center;
                            -ms-flex-align: center;
                            align-items: center;
                            -webkit-box-pack: center;
                            -ms-flex-pack: center;
                            justify-content: center;
                        }
                        .qty ~ .focus-border {
                            position: absolute;
                            bottom: 0;
                            left: 0;
                            width: 0;
                            height: 2px;
                            background-color: #3399ff;
                            -webkit-transition: 0.4s;
                            -o-transition: 0.4s;
                            transition: 0.4s;
                        }
                        .qty:focus ~ .focus-border {
                            width: 100%;
                            -webkit-transition: 0.4s;
                            -o-transition: 0.4s;
                            transition: 0.4s;
                        }
                    </style>
                </div>
                <div class="css-images w-embed">
                    <style>
                        .lazy__avatar img {
                            max-height: 26px;
                            max-width: 32px;
                        }
                    </style>
                </div>
            </div>
            <div class="js-bank">
                <div class="js-sold-out w-embed w-script">
                    <script>
                        //For wishlist, hide buy button if items-sold = active__count
                        $('.post__item').each(function() {
                            var sold = $(this).find('.items-sold').text();
                            var needed = $(this).find('.active__count').text();
                            if (sold == needed) {
                                $(this).find('.btn--wishadd').css('display', 'none');
                                $(this).find('.btn--soldout').css('display', 'flex');
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll">
        <div id="no-select" class="bar bar--header">
            <div class="container container--bar">
                <div class="bar__wrap">
                    <div id="filters" data-close="filters" data-id="trigger" data-animate="ripple" class="btn btn--filters">
                        <div class="btn__label w-embed"><text class="btn--title" style="margin-right: 6px">Filters</text>
                            <!-- <span style="margin-left: 6px" class="btn__icon"></span> -->
                            <style>
                                .btn__icon {
                                    font-family:'Font awesome 5 pro solid 900',sans-serif;
                                }
                                text.btn--title,
                                .btn--title svg {
                                    line-height: 2rem;
                                    height: 29px;
                                }
                                .lottie--sliders path {
                                    fill: white;
                                    stroke: white;
                                }
                                .lottie--box path {
                                    fill: #6499e9;
                                    stroke: #6499e9;
                                }
                            </style>
                        </div>
                        <div id="slider" class="lottie__icon"></div>
                    </div>
                    <div class="bar__search">
                        <div id="menu_tray" class="count">
                            <div id="count_item" class="counter w-embed"><span>0</span></div>
                        </div>
                        <div class="search">
                            <div class="search__icon">
                                <div></div>
                            </div>
                            <div class="search__wrap">
                                <div class="search__html w-embed"><input type="text" id="mainsearch" autocomplete="off" data-search="" placeholder="Search...">
                                    <style>
                                        .search__tag span {
                                            text-transform: lowercase;
                                        }
                                        .search__container {
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            display: flex;
                                            position: absolute;
                                            width: 100%;
                                            overflow: hidden;
                                        }
                                        .search__container ul {
                                            position: absolute;
                                            margin-bottom: -17px;
                                            padding-bottom: 17px;
                                            display: flex;
                                            overflow: auto;
                                            flex: 1;
                                            align-items: center;
                                            top: 0;
                                            bottom: 0;
                                            right: 0;
                                            left: 0;
                                            list-style-type: none;
                                        }
                                        .search__container li {
                                            flex-grow: 1;
                                            margin-left: 5px;
                                        }
                                        .search__container li input {
                                            display: block;
                                            border: none;
                                            text-align: left;
                                            height: 30px;
                                            /* min-width: 100% !important; */
                                        }
                                        .search__container li.search__tag {
                                            flex: 0;
                                            white-space: nowrap;
                                            background: #6f6e91;
                                            position: relative;
                                            height: 35px;
                                            font-weight: 600;
                                            padding: 10px;
                                            font-size: 14px;
                                            align-items: center;
                                            /*line-height for Firefox*/
                                            line-height: 1rem;
                                            border-radius: 5px;
                                            list-style: none;
                                            background-image: none;
                                            box-shadow: none;
                                            color: white;
                                        }
                                        .search__container li a {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            text-decoration: none;
                                            color: rgba(0, 0, 0, 0);
                                        }
                                        .search__container li a:hover {
                                            background-color: rgba(0, 0, 0, 0.4);
                                            border-radius: 5px;
                                            background-image: url("http://svgshare.com/i/3yv.svg");
                                            background-size: contain;
                                            background-repeat: no-repeat;
                                            background-position: center;
                                        }
                                        .search__container input{display:none}
                                    </style>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="grab" data-close="grab" data-id="trigger" data-animate="ripple" class="btn btn--grab">
                        <div class="btn__label w-embed"><text class="btn--title" style="margin-right: 6px">Crate</text>
                            <style>
                                .lottie--box path {
                                    fill: #6499e9;
                                    stroke: #6499e9;
                                }
                                @media (max-width: 479px) {
                                    .lottie--box path {
                                        fill: white;
                                        stroke: white;
                                    }
                                }
                            </style>
                        </div>
                        <div id="box" class="lottie__icon"></div>
                    </div>
                    <div class="lottie__mobile"></div>
                </div>
            </div>
        </div>
        <div id="mainsection" class="container">
            <div data-id="grab" class="modal modal--grab">
                <div class="grab">
                    <div class="grab__header">
                        <div class="grab__html w-embed"><input class="grab__input" type="text">
                            <input type="readonly" class="grab__inputvalue">
                            <button data-animate="ripple" class="btn btn--generate" id="grab__generate"></button>
                        </div>
                        <div class="btn btn--random">
                            <div>Shuffle</div>
                            <div id="shuffle" class="lottie__icon"></div>
                        </div>
                    </div>
                    <div class="grab__radio w-embed">
                        <div class="tagbox tagbox--grab" data-type="tagbox">
                            <input id="i0" type="radio" name="radio">
                            <label data-rgb="116,151,251" for="i0">
                                <mark style="background-color: rgb(116,151,251);" class="dot on"></mark>
                                <b class="tagbox__text">$<span class="grab__amount">25</span></b>
                            </label>
                        </div>
                        <div class="tagbox tagbox--grab" data-type="tagbox">
                            <input id="i1" type="radio" name="radio">
                            <label data-rgb="49,231,182" for="i1">
                                <mark style="background-color: rgb(49,231,182);" class="dot on"></mark>
                                <b class="tagbox__text">$<span class="grab__amount">50</span></b>
                            </label>
                        </div>
                        <div class="tagbox tagbox--grab" data-type="tagbox">
                            <input id="i2" type="radio" name="radio">
                            <label data-rgb="222,138,196" for="i2">
                                <mark style="background-color: rgb(222,138,196);" class="dot on"></mark>
                                <b class="tagbox__text">$<span class="grab__amount">100</span></b>
                            </label>
                        </div>
                        <div class="tagbox tagbox--grab" data-type="tagbox">
                            <input id="i3" type="radio" name="radio">
                            <label data-rgb="255,157,100" for="i3">
                                <mark style="background-color: rgb(255,157,100);" class="dot on"></mark>
                                <b class="tagbox__text">$<span class="grab__amount">250</span></b>
                            </label>
                        </div>
                    </div>
                    <div class="grab__error">
                        <div class="empty__circle empty__circle--xsmall"><img src="images/trash.svg" alt="">
                            <div class="header">
                                <div class="header__wrap">
                                    <div class="css-bank">
                                        <div class="css-icons w-embed">
                                            <style>
                                                .notify > *,
                                                .cart > *,
                                                .activity__button > * {
                                                    pointer-events: none
                                                }
                                                /*For header icon spacing*/
                                                .header__right > div {
                                                    margin-left: .9rem
                                                }
                                            </style>
                                        </div>
                                    </div>
                                    <div class="header__left">
                                        <div class="logo w-clearfix">
                                            <a href="index.html" aria-current="page" class="logo__img w-inline-block w--current"></a>
                                            <h5 class="logo__heading">Donorport</h5>
                                        </div>
                                    </div>
                                    <div class="header__right">
                                        <div class="theme__html w-embed">
                                            <div class="theme__toggle" id="toggleTheme">
                                                <span class="moon"></span>
                                                <span class="sun"></span>
                                                <small class="sun__ray"></small>
                                                <small class="sun__ray"></small>
                                                <small class="sun__ray"></small>
                                                <small class="sun__ray"></small>
                                                <small class="sun__ray"></small>
                                                <small class="sun__ray"></small>
                                            </div>
                                            <style>
                                                * {
                                                    box-sizing: border-box;
                                                }
                                                .theme__toggle {
                                                    height: 27px;
                                                    width: 27px;
                                                    position: absolute;
                                                    top: 50%;
                                                    right: 50%;
                                                    cursor: pointer;
                                                    display: flex;
                                                    align-items: center;
                                                    justify-content: center;
                                                    transform: translate(50%, -50%);
                                                }
                                                .theme__toggle .sun {
                                                    background: var(--color-secondary);
                                                    width: 27px;
                                                    height: 27px;
                                                    border-radius: 50%;
                                                    border: 4px solid var(--color-primary);
                                                }
                                                .theme__toggle .sun__ray {
                                                    width: 2px;
                                                    background: var(--color-secondary);
                                                    display: none;
                                                    height: 125%;
                                                    position: absolute;
                                                    z-index: -1;
                                                    transition: 0.4s all, height 0.3s ease-in-out;
                                                }
                                                .theme__toggle .sun__ray:nth-child(1) {
                                                    transform: rotate(calc(1 * calc(360deg / 12)));
                                                }
                                                .theme__toggle .sun__ray:nth-child(2) {
                                                    transform: rotate(calc(2 * calc(360deg / 12)));
                                                }
                                                .theme__toggle .sun__ray:nth-child(3) {
                                                    transform: rotate(calc(3 * calc(360deg / 12)));
                                                }
                                                .theme__toggle .sun__ray:nth-child(4) {
                                                    transform: rotate(calc(4 * calc(360deg / 12)));
                                                }
                                                .theme__toggle .sun__ray:nth-child(5) {
                                                    transform: rotate(calc(5 * calc(360deg / 12)));
                                                }
                                                .theme__toggle .sun__ray:nth-child(6) {
                                                    transform: rotate(calc(6 * calc(360deg / 12)));
                                                }
                                                .theme__toggle .sun__ray:nth-child(7) {
                                                    transform: rotate(calc(7 * calc(360deg / 12)));
                                                }
                                                .theme__toggle .sun__ray:nth-child(8) {
                                                    transform: rotate(calc(8 * calc(360deg / 12)));
                                                }
                                                .theme__toggle .sun__ray:nth-child(9) {
                                                    transform: rotate(calc(9 * calc(360deg / 12)));
                                                }
                                                .theme__toggle .sun__ray:nth-child(10) {
                                                    transform: rotate(calc(10 * calc(360deg / 12)));
                                                }
                                                .theme__toggle .sun__ray:nth-child(11) {
                                                    transform: rotate(calc(11 * calc(360deg / 12)));
                                                }
                                                .theme__toggle .sun__ray:nth-child(12) {
                                                    transform: rotate(calc(12 * calc(360deg / 12)));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(1) {
                                                    transform: rotate(calc(calc(1 * calc(360deg / 12)) - 20deg));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(2) {
                                                    transform: rotate(calc(calc(2 * calc(360deg / 12)) - 20deg));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(3) {
                                                    transform: rotate(calc(calc(3 * calc(360deg / 12)) - 20deg));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(4) {
                                                    transform: rotate(calc(calc(4 * calc(360deg / 12)) - 20deg));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(5) {
                                                    transform: rotate(calc(calc(5 * calc(360deg / 12)) - 20deg));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(6) {
                                                    transform: rotate(calc(calc(6 * calc(360deg / 12)) - 20deg));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(7) {
                                                    transform: rotate(calc(calc(7 * calc(360deg / 12)) - 20deg));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(8) {
                                                    transform: rotate(calc(calc(8 * calc(360deg / 12)) - 20deg));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(9) {
                                                    transform: rotate(calc(calc(9 * calc(360deg / 12)) - 20deg));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(10) {
                                                    transform: rotate(calc(calc(10 * calc(360deg / 12)) - 20deg));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(11) {
                                                    transform: rotate(calc(calc(11 * calc(360deg / 12)) - 20deg));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(12) {
                                                    transform: rotate(calc(calc(12 * calc(360deg / 12)) - 20deg));
                                                }
                                                .moon {
                                                    height: 18px;
                                                    width: 18px;
                                                    position: absolute;
                                                    background: var(--color-primary);
                                                    border-radius: 50%;
                                                    top: 0;
                                                    right: 0;
                                                    transform: scale(0) translate(25%, -25%);
                                                    z-index: 9;
                                                    transition: 0.4s transform;
                                                    transform-origin: right;
                                                }
                                                .dark-theme .theme__toggle {
                                                    background-color: var(--color-primary);
                                                }
                                                .dark-theme .theme__toggle:hover .moon {
                                                    transform: scale(1) translate(-3%, -18%);
                                                }
                                                .dark-theme .moon {
                                                    transform: scale(1) translate(11%, -11%);
                                                }
                                                .dark-theme .theme__toggle .sun__ray {
                                                    height: 0;
                                                    transition: 0.4s, transform 0.4s, height 0.2s 0.1s;
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(1) {
                                                    transform: rotate(calc(calc(1 * calc(360deg / 12)) - 45deg));
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(2) {
                                                    transform: rotate(calc(calc(2 * calc(360deg / 12)) - 45deg));
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(3) {
                                                    transform: rotate(calc(calc(3 * calc(360deg / 12)) - 45deg));
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(4) {
                                                    transform: rotate(calc(calc(4 * calc(360deg / 12)) - 45deg));
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(5) {
                                                    transform: rotate(calc(calc(5 * calc(360deg / 12)) - 45deg));
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(6) {
                                                    transform: rotate(calc(calc(6 * calc(360deg / 12)) - 45deg));
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(7) {
                                                    transform: rotate(calc(calc(7 * calc(360deg / 12)) - 45deg));
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(8) {
                                                    transform: rotate(calc(calc(8 * calc(360deg / 12)) - 45deg));
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(9) {
                                                    transform: rotate(calc(calc(9 * calc(360deg / 12)) - 45deg));
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(10) {
                                                    transform: rotate(calc(calc(10 * calc(360deg / 12)) - 45deg));
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(11) {
                                                    transform: rotate(calc(calc(11 * calc(360deg / 12)) - 45deg));
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(12) {
                                                    transform: rotate(calc(calc(12 * calc(360deg / 12)) - 45deg));
                                                }
                                            </style>
                                        </div>
                                        <div id="admin" data-close="admin" data-id="trigger" class="notify">
                                            <div><strong></strong></div>
                                            <div class="indicator">
                                                <div class="notifcation notification--admin"></div>
                                            </div>
                                        </div>
                                        <div class="w-dyn-list">
                                            <div role="list" class="w-dyn-items">
                                                <div role="listitem" class="header__user w-dyn-item">
                                                    <a href="#" id="account" data-close="account" data-id="trigger" class="header__thumb w-inline-block"></a>
                                                </div>
                                            </div>
                                            <div class="empty__item w-dyn-empty">
                                                <div>No items found.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header">
                                <div class="header__wrap">
                                    <div class="css-bank">
                                        <div class="css-icons w-embed">
                                            <style>
                                                .notify > *,
                                                .cart > *,
                                                .activity__button > * {
                                                    pointer-events: none
                                                }
                                                /*For header icon spacing*/
                                                .header__right > div {
                                                    margin-left: .9rem
                                                }
                                            </style>
                                        </div>
                                    </div>
                                    <div class="header__left">
                                        <div class="logo w-clearfix">
                                            <a href="index.html" aria-current="page" class="logo__img w-inline-block w--current"></a>
                                            <h5 class="logo__heading">Donorport</h5>
                                        </div>
                                    </div>
                                    <div class="header__right">
                                        <div class="theme__html w-embed">
                                            <div class="theme__toggle" id="toggleTheme">
                                                <span class="moon"></span>
                                                <span class="sun"></span>
                                                <small class="sun__ray"></small>
                                                <small class="sun__ray"></small>
                                                <small class="sun__ray"></small>
                                                <small class="sun__ray"></small>
                                                <small class="sun__ray"></small>
                                                <small class="sun__ray"></small>
                                            </div>
                                            <style>
                                                * {
                                                    box-sizing: border-box;
                                                }
                                                .theme__toggle {
                                                    height: 27px;
                                                    width: 27px;
                                                    position: absolute;
                                                    top: 50%;
                                                    right: 50%;
                                                    cursor: pointer;
                                                    display: flex;
                                                    align-items: center;
                                                    justify-content: center;
                                                    transform: translate(50%, -50%);
                                                }
                                                .theme__toggle .sun {
                                                    background: var(--color-secondary);
                                                    width: 27px;
                                                    height: 27px;
                                                    border-radius: 50%;
                                                    border: 4px solid var(--color-primary);
                                                }
                                                .theme__toggle .sun__ray {
                                                    width: 2px;
                                                    background: var(--color-secondary);
                                                    display: none;
                                                    height: 125%;
                                                    position: absolute;
                                                    z-index: -1;
                                                    transition: 0.4s all, height 0.3s ease-in-out;
                                                }
                                                .theme__toggle .sun__ray:nth-child(1) {
                                                    transform: rotate(calc(1 * calc(360deg / 12)));
                                                }
                                                .theme__toggle .sun__ray:nth-child(2) {
                                                    transform: rotate(calc(2 * calc(360deg / 12)));
                                                }
                                                .theme__toggle .sun__ray:nth-child(3) {
                                                    transform: rotate(calc(3 * calc(360deg / 12)));
                                                }
                                                .theme__toggle .sun__ray:nth-child(4) {
                                                    transform: rotate(calc(4 * calc(360deg / 12)));
                                                }
                                                .theme__toggle .sun__ray:nth-child(5) {
                                                    transform: rotate(calc(5 * calc(360deg / 12)));
                                                }
                                                .theme__toggle .sun__ray:nth-child(6) {
                                                    transform: rotate(calc(6 * calc(360deg / 12)));
                                                }
                                                .theme__toggle .sun__ray:nth-child(7) {
                                                    transform: rotate(calc(7 * calc(360deg / 12)));
                                                }
                                                .theme__toggle .sun__ray:nth-child(8) {
                                                    transform: rotate(calc(8 * calc(360deg / 12)));
                                                }
                                                .theme__toggle .sun__ray:nth-child(9) {
                                                    transform: rotate(calc(9 * calc(360deg / 12)));
                                                }
                                                .theme__toggle .sun__ray:nth-child(10) {
                                                    transform: rotate(calc(10 * calc(360deg / 12)));
                                                }
                                                .theme__toggle .sun__ray:nth-child(11) {
                                                    transform: rotate(calc(11 * calc(360deg / 12)));
                                                }
                                                .theme__toggle .sun__ray:nth-child(12) {
                                                    transform: rotate(calc(12 * calc(360deg / 12)));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(1) {
                                                    transform: rotate(calc(calc(1 * calc(360deg / 12)) - 20deg));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(2) {
                                                    transform: rotate(calc(calc(2 * calc(360deg / 12)) - 20deg));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(3) {
                                                    transform: rotate(calc(calc(3 * calc(360deg / 12)) - 20deg));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(4) {
                                                    transform: rotate(calc(calc(4 * calc(360deg / 12)) - 20deg));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(5) {
                                                    transform: rotate(calc(calc(5 * calc(360deg / 12)) - 20deg));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(6) {
                                                    transform: rotate(calc(calc(6 * calc(360deg / 12)) - 20deg));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(7) {
                                                    transform: rotate(calc(calc(7 * calc(360deg / 12)) - 20deg));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(8) {
                                                    transform: rotate(calc(calc(8 * calc(360deg / 12)) - 20deg));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(9) {
                                                    transform: rotate(calc(calc(9 * calc(360deg / 12)) - 20deg));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(10) {
                                                    transform: rotate(calc(calc(10 * calc(360deg / 12)) - 20deg));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(11) {
                                                    transform: rotate(calc(calc(11 * calc(360deg / 12)) - 20deg));
                                                }
                                                .theme__toggle:hover .sun__ray:nth-child(12) {
                                                    transform: rotate(calc(calc(12 * calc(360deg / 12)) - 20deg));
                                                }
                                                .moon {
                                                    height: 18px;
                                                    width: 18px;
                                                    position: absolute;
                                                    background: var(--color-primary);
                                                    border-radius: 50%;
                                                    top: 0;
                                                    right: 0;
                                                    transform: scale(0) translate(25%, -25%);
                                                    z-index: 9;
                                                    transition: 0.4s transform;
                                                    transform-origin: right;
                                                }
                                                .dark-theme .theme__toggle {
                                                    background-color: var(--color-primary);
                                                }
                                                .dark-theme .theme__toggle:hover .moon {
                                                    transform: scale(1) translate(-3%, -18%);
                                                }
                                                .dark-theme .moon {
                                                    transform: scale(1) translate(11%, -11%);
                                                }
                                                .dark-theme .theme__toggle .sun__ray {
                                                    height: 0;
                                                    transition: 0.4s, transform 0.4s, height 0.2s 0.1s;
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(1) {
                                                    transform: rotate(calc(calc(1 * calc(360deg / 12)) - 45deg));
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(2) {
                                                    transform: rotate(calc(calc(2 * calc(360deg / 12)) - 45deg));
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(3) {
                                                    transform: rotate(calc(calc(3 * calc(360deg / 12)) - 45deg));
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(4) {
                                                    transform: rotate(calc(calc(4 * calc(360deg / 12)) - 45deg));
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(5) {
                                                    transform: rotate(calc(calc(5 * calc(360deg / 12)) - 45deg));
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(6) {
                                                    transform: rotate(calc(calc(6 * calc(360deg / 12)) - 45deg));
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(7) {
                                                    transform: rotate(calc(calc(7 * calc(360deg / 12)) - 45deg));
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(8) {
                                                    transform: rotate(calc(calc(8 * calc(360deg / 12)) - 45deg));
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(9) {
                                                    transform: rotate(calc(calc(9 * calc(360deg / 12)) - 45deg));
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(10) {
                                                    transform: rotate(calc(calc(10 * calc(360deg / 12)) - 45deg));
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(11) {
                                                    transform: rotate(calc(calc(11 * calc(360deg / 12)) - 45deg));
                                                }
                                                .dark-theme .theme__toggle .sun__ray:nth-child(12) {
                                                    transform: rotate(calc(calc(12 * calc(360deg / 12)) - 45deg));
                                                }
                                            </style>
                                        </div>
                                        <div id="admin" data-close="admin" data-id="trigger" class="notify">
                                            <div><strong></strong></div>
                                            <div class="indicator">
                                                <div class="notifcation notification--admin"></div>
                                            </div>
                                        </div>
                                        <div class="w-dyn-list">
                                            <div role="list" class="w-dyn-items">
                                                <div role="listitem" class="header__user w-dyn-item">
                                                    <a href="#" id="account" data-close="account" data-id="trigger" class="header__thumb w-inline-block"></a>
                                                </div>
                                            </div>
                                            <div class="empty__item w-dyn-empty">
                                                <div>No items found.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="title title--log w-embed"><text class="item__title project__title">No Items</text></div>
                        <div class="w-embed">There are no items available from the grab bag at the moment.</div>
                    </div>
                    <div class="price__error"></div>
                    <div class="grab__content">
                        <div class="grab__main">
                            <div class="grab__wrap w-dyn-list">
                                <div role="list" class="grab__list w-dyn-items">
                                    <div role="listitem" class="grab__item w-dyn-item">
                                        <div class="post__hidden w-embed">
                                            <div class="grab__sold"></div>
                                            <div class="grab__count"></div>
                                            <div class="grab__name"></div>
                                            <div class="grab__id" id="grab__"></div>
                                        </div>
                                        <div class="avatar avatar--grab">
                                            <a href="#" class="hotspot w-inline-block"></a>
                                            <div class="grab__badge w-embed">
                                                <div class="grab__quantity">0</div>
                                            </div>
                                            <div class="w-embed"><img class="lazy grab__img" data-src=""></div>
                                        </div>
                                        <div class="grab__mid">
                                            <div class="grab__value w-embed">
                                                <div class="grab__price"><span>$</span></div>
                                            </div>
                                            <div class="progress w-embed">
                                                <div class="progress__slider">
                                                    <div class="progress__bar">
                                                        <span></span>
                                                    </div>
                                                    <!-- <div class="progress-slider--label"></div> -->
                                                </div>
                                            </div>
                                            <div class="w-embed">
                                                <div class="grab__percent" data-percent="">
                                                    <div class="grab__progress"><span>0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grab__subtotal w-embed">
                                            <div class="grab__subtotal"><span>$</span>0</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-dyn-empty">
                                    <div>No items found.</div>
                                </div>
                            </div>
                            <div class="note note--grab">
                                <div>Items listed here are going underfunded. Help the Organization get funded faster <span class="note__span"></span></div>
                                <a href="crate.html" class="link link--xp w-inline-block">
                                    <h6>Learn more</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="grab__checkout">
                        <div data-animate="ripple" class="btn btn--addtocart w-embed"><span>Add to Cart</span>
                            <div id="count_grabitem" class="grab__counter" style="margin-left: 3px">(<span>0</span>)</div>
                        </div>
                        <div class="btn btn--checkout ripple w-embed">Checkout:<span class="grab__total" style="margin-left: 6px"><span>$</span>0</span></div>
                    </div>
                </div>
                <div class="modal__footer"></div>
                <div class="css-bank">
                    <div class="css-grab w-embed">
                        <style>
                            .grab__img {
                                max-height: 46px;
                                max-width: 46px;
                            }
                        </style>
                    </div>
                </div>
            </div>
            <div data-id="filters" class="modal modal--filters">
                <div class="filter filter--home">
                    <div class="filter__wrap">
                        <div class="filter__toggles w-embed">
                            <div class="filter__checkboxes">
                                <label class="filter__toggle">
                                    <input type="checkbox" id="tax" class="filter__checkbox" data-section="tax" data-type="Tax" style="display: none">
                                    <div class="filter__icon filter__icon--tax">􏙌</div>
                                    <div class="filter__text">Tax Eligible</div>
                                </label>
                                <label class="filter__toggle">
                                    <input type="checkbox" id="tab" class="filter__checkbox" data-section="tab" data-type="Tab" style="display: none">
                                    <div class="filter__icon filter__icon--tab"></div>
                                    <div class="filter__text">Already Purchased</div>
                                </label>
                            </div>
                            <style>
                                .filter__text {
                                    display: none;
                                    font-size: 12px;
                                    margin-left: 9px;
                                    white-space: nowrap;
                                }
                                .filter__checkboxes {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                }
                                .filter__icon {
                                    font-family: 'Font awesome 5 pro 400',sans-serif;
                                }
                                .filter__icon--tax {
                                    font-family: 'Font awesome 5 duotone solid 900',sans-serif !important;
                                }
                                .filter__toggle input {
                                    display: none
                                }
                                .filter__toggle {
                                    margin: 0 .3rem;
                                    border-radius: 50%;
                                    height: 40px;
                                    width: 40px;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    align-items: center;
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    justify-content: center;
                                    padding: .6rem;
                                    font-size: 19px;
                                    cursor: pointer
                                }
                                .filter__icon.checked {
                                    -webkit-animation: bounce 250ms none;
                                    animation: bounce 250ms none;
                                    -webkit-animation-timing-function: ease-in-out;
                                    animation-timing-function: ease-in-out;
                                }
                                .filter__icon--tax.checked {
                                    color: #3a94d4
                                }
                                .filter__icon--tab.checked {
                                    color: #947ada
                                }
                                label.filter__icon.filter__icon--tax:hover {
                                    color: #3a94d4
                                }
                                label.filter__icon.filter__icon--tab:hover {
                                    color: #947ada
                                }
                                @-webkit-keyframes bounce {
                                    0% {
                                        -webkit-transform: scale(0.9);
                                        transform: scale(0.9);
                                    }
                                    50% {
                                        -webkit-transform: scale(1.1);
                                        transform: scale(1.2);
                                    }
                                    100% {
                                        -webkit-transform: scale(1);
                                        transform: scale(1);
                                    }
                                }
                                @keyframes bounce {
                                    0% {
                                        -webkit-transform: scale(0.9);
                                        transform: scale(0.9);
                                    }
                                    50% {
                                        -webkit-transform: scale(1.2);
                                        transform: scale(1.2);
                                    }
                                    100% {
                                        -webkit-transform: scale(1);
                                        transform: scale(1);
                                    }
                                }
                                @media (max-width: 479px) {
                                    .filter__text {
                                        display: flex;
                                    }
                                    .filter__toggle {
                                        width: auto;
                                        padding: 6px 16px;
                                        border-radius: 28px;
                                    }
                                }
                            </style>
                        </div>
                        <div class="sort w-embed"><label class="sort__label">
                                <input class="sort__input" type="radio" name="sort" value="Lower" data-title="$" data-type="cost" data-target="filters">
                                <span class="sort__text">
                    <div class="sort__icon"></div>
                    <div class="sort__icon"></div>
                  </span>
                            </label>
                            <label class="sort__label">
                                <input class="sort__input" type="radio" name="sort" value="Higher" data-title="$$$" data-type="cost" data-target="filters">
                                <span class="sort__text">
                    <div class="sort__icon"></div>
                    <div class="sort__icon"></div>
                  </span>
                            </label>
                            <label class="sort__label">
                                <input class="sort__input" type="radio" name="sort" value="Lower" data-title="Oldest" data-type="date" data-target="filters">
                                <span class="sort__text">Oldest</span>
                            </label>
                            <label class="sort__label">
                                <input class="sort__input" type="radio" name="sort" value="Higher" data-title="Newest" data-type="date" data-target="filters">
                                <span class="sort__text">Newest</span>
                            </label>
                            <label class="sort__label">
                                <input class="sort__input" type="radio" name="sort" value="Lower" data-title="Low %" data-type="percentage" data-target="filters">
                                <span class="sort__text">
                    <div class="sort__icon"></div>
                    <div class="sort__icon"></div>
                  </span>
                            </label>
                            <label class="sort__label">
                                <input class="sort__input" type="radio" name="sort" value="Higher" data-title="High %" data-type="percentage" data-target="filters">
                                <span class="sort__text">
                    <div class="sort__icon"></div>
                    <div class="sort__icon"></div>
                  </span>
                            </label>
                            <div id="clear"></div>
                            <style>
                                /*
* Prefixed by https://autoprefixer.github.io
* PostCSS: v7.0.29,
* Autoprefixer: v9.7.6
* Browsers: last 4 version
*/
                                .sort {
                                    min-width: 120px;
                                    line-height: 1;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    white-space: nowrap;
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    align-items: center;
                                    -webkit-box-pack: justify;
                                    -ms-flex-pack: justify;
                                    justify-content: space-between;
                                    min-width: 120px;
                                }
                                .sort__label {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    height: 42px;
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    align-items: center;
                                    border-radius: 4px;
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    justify-content: center;
                                    margin: 0;
                                    position: relative;
                                    cursor: pointer;
                                    padding: 0;
                                }
                                .sort__text {
                                    text-align: center;
                                    font-size: 10px;
                                    text-transform: uppercase;
                                    position: relative;
                                    padding: 0rem 0.6rem;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    max-width: 49px;
                                    height: 30px;
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    align-items: center;
                                    border-radius: 6px;
                                    background: transparent;
                                    -webkit-transition: padding 0.2s ease;
                                    -o-transition: padding 0.2s ease;
                                    transition: padding 0.2s ease;
                                    z-index: 0;
                                    -webkit-user-select: none;
                                    -moz-user-select: none;
                                    -ms-user-select: none;
                                    user-select: none;
                                }
                                .sort__text:before {
                                    content: "";
                                    position: absolute;
                                    width: 100%;
                                    height: 100%;
                                    top: 0;
                                    left: 0;
                                    background: transparent;
                                    z-index: -1;
                                    -webkit-transition: all 0.2s cubic-bezier(0.45, 0.05, 0.55, 0.95);
                                    -o-transition: all 0.2s cubic-bezier(0.45, 0.05, 0.55, 0.95);
                                    transition: all 0.2s cubic-bezier(0.45, 0.05, 0.55, 0.95);
                                    pointer-events: none;
                                }
                                .sort__label input {
                                    opacity: 0;
                                    position: absolute;
                                    margin: 0;
                                }
                                .sort__label input:checked ~ .sort__text {
                                    background: #ececec;
                                    font-weight: 900;
                                    padding: 0 1.6rem;
                                    max-height: 32px;
                                    border-radius: 3px;
                                }
                                .sort__text:before {
                                    content: "";
                                    position: absolute;
                                    width: 100%;
                                    height: 100%;
                                    top: 0;
                                    left: 0;
                                    background: transparent;
                                    z-index: -1;
                                    -webkit-transition: all 0.2s cubic-bezier(0.45, 0.05, 0.55, 0.95);
                                    -o-transition: all 0.2s cubic-bezier(0.45, 0.05, 0.55, 0.95);
                                    transition: all 0.2s cubic-bezier(0.45, 0.05, 0.55, 0.95);
                                    pointer-events: none;
                                }
                                .sort .sort__text {
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    justify-content: center;
                                    height: 42px;
                                    border-radius: 6px;
                                }
                                .sort__text span {
                                    font-family: Font Awesome Pro;
                                    font-size: 10px !important;
                                }
                                .sort__icon {
                                    font-size: 14px;
                                    font-family: 'Font awesome 5 pro 400',sans-serif;
                                }
                                .sort__label.checked * .sort__icon,
                                #clear {
                                    font-family: 'Font awesome 5 pro solid 900',sans-serif;
                                }
                                #clear {
                                    display: none;
                                    color: indianred;
                                    transform: scale(0);
                                    transition: all 100ms cubic-bezier(0.83, 0, 0.17, 1);
                                    cursor: pointer
                                }
                                #clear.active {
                                    font-size: .9rem;
                                    display: flex;
                                    padding: 0 .6rem;
                                    transform: scale(1)
                                }
                                @media (max-width: 479px) {
                                    .sort__text {
                                        padding: 0rem;
                                    }
                                    .sort__label input:checked ~ .sort__text {
                                        padding: 0 .9rem;
                                    }
                                }
                            </style>
                        </div>
                        <div class="filter__slider">
                            <div class="slider w-embed"><input type="text" class="slider__bar" value="" data-target="filters">
                                <!-- Class names below come from CDN -->
                                <style>
                                    /*
* Prefixed by https://autoprefixer.github.io
* PostCSS: v7.0.29,
* Autoprefixer: v9.7.6
* Browsers: last 4 version
*/
                                    .irs--round .irs-grid-pol {
                                        background-color: unset
                                    }
                                    .irs--round .irs-min, .irs--round .irs-max {
                                        color: #6f6f90;
                                    }
                                    .irs--round .irs-handle.state_hover, .irs--round .irs-handle:hover {
                                        cursor: pointer;
                                        background-color: #756fe4;
                                    }
                                    .irs--round .irs-handle {
                                        background-color: #756fe4;
                                        top: 27px;
                                        height: 24px;
                                    }
                                    .irs {
                                        font-family: inherit;
                                    }
                                    .irs--round .irs-line {
                                        background: unset;
                                        height: 8px;
                                    }
                                    .irs--round .irs-bar {
                                        height: 8px;
                                        background-color: #b2b2d0
                                    }
                                    .irs--round .irs-grid-text {
                                        color: #aaa9c2;
                                        font-size: 10px;
                                    }
                                    .irs--round .irs-from, .irs--round .irs-to, .irs--round .irs-single {
                                        font-size: 12px;
                                        background: #727296;
                                    }
                                    .irs--round .irs-min, .irs--round .irs-max {
                                        font-size: 12px;
                                        line-height: 1;
                                        top: 0;
                                        padding: 3px 5px;
                                        background-color: rgba(0,0,0,0.1);
                                        border-radius: 4px;
                                    }
                                    .irs--round .irs-handle {
                                        border: 4px solid #756fe4;
                                        border-radius: 50%;
                                        -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.2);
                                        box-shadow: 0 1px 3px rgba(0,0,0,0.2);
                                    }
                                    .irs--round .irs-from:before, .irs--round .irs-to:before, .irs--round .irs-single:before {
                                        border-top-color: #727296;
                                    }
                                    .irs-from:after,
                                    .irs-to:after,
                                    .irs-single:after {
                                        border-top-color: #727296;
                                    }
                                    .irs-slider {
                                        cursor: pointer;
                                    }
                                    #ds1,
                                    #ds2 {
                                        border: 1px solid #d8d8de;
                                        background: rgba(255, 0, 0, 0);
                                        border-radius: 6px;
                                        margin: 6px;
                                        width: 60px;
                                        padding: 6px;
                                        line-height: 1rem;
                                        font-size: 12px;
                                    }
                                </style>
                            </div>
                            <div class="post__hidden w-embed"><label>min</label>
                                <input id="slider_from" type="text" maxlength="4" value="0" class="slider__input slider__input--from" data-target="filters">
                                <label>max</label>
                                <input id="slider_to" type="text" maxlength="4" value="10000" class="slider__input slider__input--from" data-target="filters">
                            </div>
                        </div>
                    </div>
                    <div class="locations locations--filters w-dyn-list">
                        <div id="loc-radios" role="list" class="locations__list w-dyn-items">
                            <div role="listitem" class="locations__item w-dyn-item">
                                <div class="w-embed">
                                    <!-- item__checkboxes classes needed for filtering code -->
                                    <div class="filter__checkboxes" data-type="tagbox">
                                        <input class="filter__checkbox" type="checkbox" data-input="checkbox" id="" value="" data-color="" data-section="other" data-type="" data-target="locations">
                                        <label data-rgb="" for="">
                                            <mark style="background-color: rgb();" class="dot on"></mark>
                                            <text class="text--tagbox"></text>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="emptystate w-dyn-empty">
                            <div>No items found.</div>
                        </div>
                    </div>
                    <div class="category w-dyn-list">
                        <div role="list" class="category__list w-dyn-items">
                            <div role="listitem" class="category__item w-dyn-item">
                                <div class="category__html w-embed"><label class="category__label" for="">
                                        <!-- data-name is required on both category and subcategory buttons for filtering -->
                                        <!-- filter__btn class name is in the filters code. For Cat & Subcat (not initiated but a part of the code
 -->
                                        <input class="filter__btn filter__btn--category" type="checkbox" id="" value="" data-category="" data-name="" data-color="">
                                        <div class="category__text"></div>
                                        <img class="category__icon" src="">
                                    </label></div>
                            </div>
                        </div>
                        <div class="w-dyn-empty">
                            <div>No items found.</div>
                        </div>
                    </div>
                    <div class="account__footer"></div>
                </div>
            </div>
            <div class="bulk">
                <div class="bulk__html w-embed">
                    <div class="bulk__right">I want to donate up to <input id="filterPrice" class="bulk__input" type="tel">
                        <input type="readonly" class="bulk__inputvalue">
                        <span>to these items:</span>
                    </div>
                    <style>
                        .bulk__right {
                            display: flex;
                            flex: 1;
                            align-items: center;
                        }
                        .bulk__input {
                            font-weight: 700;
                            margin: 0 .6rem;
                        }
                        @media only screen and (max-width: 479px) {
                            .bulk {
                                flex-wrap: wrap
                            }
                            .bulk__right > span {
                                display: none
                            }
                            .bulk__right input {
                                flex: 1
                            }
                        }
                    </style>
                </div>
                <div data-animate="ripple" class="bulk__button w-embed"><button class="btn btn--bulkadd" data-animate="ripple">Add to Cart <span class="bulk__counter">(0)</span></button>
                    <style>
                        .btn--bulkadd {
                            outline: none;
                            height: auto;
                            padding: 10px 12px;
                            border-style: solid;
                            border-width: 2px;
                            border-color: #736bff;
                            background-color: rgba(117,111,228,0);
                            color: #736bff;
                        }
                        @media only screen and (max-width: 479px) {
                            .btn--bulkadd  {
                                height: 52px
                            }
                        }
                        span.bulk__counter {
                            margin-left: .3rem;
                        }
                    </style>
                </div>
            </div>
            <div class="post w-dyn-list">
                <div id="portfolio" role="list" class="post__list w-dyn-items">
                    <div data-id="product" data-show="on" role="listitem" class="post__item w-dyn-item">
                        <div class="post__wrap">
                            <div class="css-bank">
                                <div class="post__html w-embed">
                                    <div id="" class="post__data   all" data-qty="" data-time="" data-filter-item="" data-color="" data-cost="" data-cat="" data-sub="" data-location="" data-project="" data-tab="" data-tax="" data-searcha="" data-searchb="" data-searchc="" data-keyword="">
                                    </div>
                                </div>
                                <div class="post__count w-embed">
                                    <!-- need class count with availabale to work with max allowed to cart given availble -->
                                    <span class="sold"></span>
                                    <span class="count available"></span>
                                    <div class="needed"></div>
                                    <div class="post__id" id="post__"></div>
                                </div>
                                <div class="post__hidden w-embed"><input type="text" autocomplete="off" placeholder="amount..." name="quantity" value="" class="qty">
                                    <input type="button" class="post__btn post__btn--minus" field="quantity">
                                    <input type="button" class="post__btn post__btn--plus" field="quantity">
                                </div>
                            </div>
                            <a href="#" class="post__header w-inline-block"></a>
                            <div class="post__top">
                                <div class="wish wish--user w-embed"><label class="wish__label">
                                        <input type="checkbox" name="wish" class="wish__input">
                                        <div class="wish__icon"></div>
                                    </label></div>
                                <div class="progress w-embed">
                                    <div class="progress__slider">
                                        <div class="progress__bar">
                                            <span></span>
                                        </div>
                                        <!-- <div class="progress__slider--label"></div> -->
                                    </div>
                                </div>
                                <div class="w-embed">
                                    <div class="progress__percent" data-percent="">
                                        <span class="progress__span">%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="post__main">
                                <div class="post__columns">
                                    <div class="post__left">
                                        <div class="post__order">
                                            <a href="#" class="w-inline-block">
                                                <h4 class="post__title"></h4>
                                            </a>
                                            <div>Price:</div>
                                            <div class="price">
                                                <div>$</div>
                                                <div class="cost"></div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn--soldout w-button">Sold</a>
                                        <a data-animate="ripple" href="#" class="btn btn--product w-button"></a>
                                    </div>
                                    <div class="post__mid">
                                        <div class="post__src w-embed"><img class="lazy post__img" data-src=""></div>
                                    </div>
                                    <div class="post__right">
                                        <div class="post__org">
                                            <a href="#" class="hotspot w-inline-block"></a>
                                            <div class="post__lazy w-embed"><img class="lazy" data-src=""></div>
                                        </div>
                                        <a href="#" class="post__location w-inline-block">
                                            <div></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="post__details">
                                    <div class="post__text">
                                        <div><strong></strong></div>
                                    </div>
                                    <div class="post__date"></div>
                                    <div class="post__meta">
                                        <a href="#" class="post__type w-inline-block">
                                            <div><strong></strong></div>
                                        </a>
                                        <div class="post__type post__type--tab">
                                            <div><strong></strong></div>
                                        </div>
                                        <div class="post__type post__type--tax">
                                            <div><strong>􏙌</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post__category">
                                <a href="#" class="post__icon w-inline-block"><img src="" alt=""></a>
                                <div class="post__subcategory">
                                    <div class="post__svg w-embed"><svg viewbox="0 0 25 25" height="20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#6f6f90" d=""></path>
                                            <path fill="#6f6f90" d=""></path>
                                        </svg></div>
                                    <h6></h6>
                                </div>
                                <div class="post__count w-embed">
                                    <h5><span></span></h5><span>/</span>
                                    <h5></h5><span>sold</span>
                                </div>
                            </div>
                            <div class="post__footer"></div>
                        </div>
                    </div>
                </div>
                <div class="empty__item w-dyn-empty">
                    <div>No items found.</div>
                </div>
            </div>
            <div class="empty__modal">
                <div id="noSlider" class="empty__block hidden">
                    <div class="empty__container">
                        <div class="empty__circle empty--small"><img src="images/tag.svg" alt=""></div>
                        <div class="empty__message">
                            <div class="title title--small w-embed"><text class="item__title project__title">There are no results in this range</text></div>
                            <div class="empty__text">
                                <p>Try broadening your search.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="noFilter" class="empty__block hidden">
                    <div class="empty__container">
                        <div class="empty__circle empty--small"><img src="images/023-setting.svg" alt=""></div>
                        <div class="empty__message">
                            <div class="title title--small w-embed"><text class="item__title project__title">There are no results with these filters</text></div>
                            <div class="empty__text">
                                <p>Try removing some toggles.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="noButton" class="empty__block hidden">
                    <div class="empty__container">
                        <div class="empty__circle empty--small"><img src="images/blend.svg" alt=""></div>
                        <div class="empty__message">
                            <div class="title title--small w-embed"><text class="item__title project__title">No matches in this category</text></div>
                            <div class="empty__text">
                                <p>Try removing your search or checking another category.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="noData" class="empty__block hidden">
                    <div class="empty__container">
                        <div class="empty__circle empty--small"><img src="images/qr-code.svg" alt=""></div>
                        <div class="empty__message">
                            <div class="title title--small w-embed"><text class="item__title project__title">There are no results matching your search</text></div>
                            <div class="empty__text">
                                <p>Try broadening your search.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer__top">
                <div class="footer__block footer__block--50">
                    <div class="footer__title">
                        <h5>About</h5>
                    </div>
                    <div class="footer__links">
                        <a href="index.html" aria-current="page" class="link link--footer w-inline-block w--current">
                            <div>Home</div>
                        </a>
                        <a href="terms.html" class="link link--footer w-inline-block">
                            <div>Terms of Service</div>
                        </a>
                        <a href="#" class="link link--footer w-inline-block">
                            <div>Privacy Policy</div>
                        </a>
                        <a href="media.html" class="link link--footer w-inline-block">
                            <div>Press &amp; Media</div>
                        </a>
                        <a href="leaderboard.html" class="link link--footer w-inline-block">
                            <div>Leaderboard</div>
                        </a>
                        <a href="xp.html" class="link link--footer w-inline-block">
                            <div>XP</div>
                        </a>
                        <a href="ranks.html" class="link link--footer w-inline-block">
                            <div>Ranks</div>
                        </a>
                    </div>
                </div>
                <div class="footer__block footer__block--50">
                    <div class="footer__title">
                        <h5>Support</h5>
                    </div>
                    <div class="footer__links">
                        <a href="partnership.html" class="link link--footer w-inline-block">
                            <div>Partnerships</div>
                        </a>
                        <a href="sponsors.html" class="link link--footer w-inline-block">
                            <div>Sponsorships</div>
                        </a>
                        <a href="apply.html" class="link link--footer w-inline-block">
                            <div>Application</div>
                        </a>
                        <a href="contact.html" class="link link--footer w-inline-block">
                            <div>Contact</div>
                        </a>
                    </div>
                </div>
                <div class="footer__block">
                    <div class="footer__title">
                        <h5>Information</h5>
                    </div>
                    <div class="footer__links">
                        <a href="listing.html" class="link link--footer w-inline-block">
                            <div>Listing on Donorport</div>
                        </a>
                        <a href="trust.html" class="link link--footer w-inline-block">
                            <div>Trust &amp; Safety</div>
                        </a>
                        <a href="crate.html" class="link link--footer w-inline-block">
                            <div>The Crate</div>
                        </a>
                    </div>
                    <a href="verified.html" class="link link--footer w-inline-block">
                        <div>Become Verified</div>
                    </a>
                    <a href="fees.html" class="link link--footer w-inline-block">
                        <div>Pricing</div>
                    </a>
                </div>
                <div class="footer__block footer__block--categories">
                    <div class="footer__title">
                        <h5>Categories</h5>
                    </div>
                    <div class="w-dyn-list">
                        <div role="list" class="footer__links footer__links--category w-dyn-items">
                            <div role="listitem" class="footer__item footer__item--category w-dyn-item">
                                <a href="#" class="link link--footer w-inline-block">
                                    <div></div>
                                </a>
                            </div>
                        </div>
                        <div class="w-dyn-empty">
                            <div>No items found.</div>
                        </div>
                    </div>
                </div>
                <div class="footer__block">
                    <div class="footer__title">
                        <h5>Locations</h5>
                    </div>
                    <div class="w-dyn-list">
                        <div role="list" class="footer__links footer__links--locations w-dyn-items">
                            <div role="listitem" class="w-dyn-item">
                                <a href="#" class="link link--footer w-inline-block">
                                    <div></div>
                                </a>
                            </div>
                        </div>
                        <div class="w-dyn-empty">
                            <div>No items found.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__block footer__block--corporate">
                    <div class="footer__links footer__links--corporate">
                        <div class="footer__logo">
                            <div>© 2021 Donorport, Inc.</div>
                        </div>
                    </div>
                </div>
                <div class="footer__links footer__links--social">
                    <a href="#" class="footer__link footer__link--action w-inline-block">
                        <div class="footer__icon">
                            <div></div>
                        </div>
                        <div>Facebook</div>
                    </a>
                    <a href="#" class="footer__link footer__link--action w-inline-block">
                        <div class="footer__icon">
                            <div></div>
                        </div>
                        <div>Instagram</div>
                    </a>
                    <a href="#" class="footer__link footer__link--action w-inline-block">
                        <div class="footer__icon">
                            <div></div>
                        </div>
                        <div>Twitter</div>
                    </a>
                </div>
                <div class="wg-element">
                    <div class="wg-element-wrapper sw3">
                        <a lang="en" data-w-id="cde23db9-02b5-fdd2-8742-d3e4e3d919c8" href="#" class="wg-selector-2 s1 w-inline-block">
                            <div class="wg-selector-2-fill f1"></div>
                            <div class="wg-selector2-text-lang1">EN</div>
                        </a>
                        <a lang="zh" data-w-id="cde23db9-02b5-fdd2-8742-d3e4e3d919cc" href="#" class="wg-selector-2 s2 w-inline-block">
                            <div class="wg-selector-2-fill f2"></div>
                            <div class="wg-selector2-text-lang2">ZH</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="js-bank">
    <div class="js-bank">
        <div class="js-progress-sliders w-embed w-script">
            <script>
                $(document).ready(function () {
                    //Slider bar //
                    $("[data-id='product']").each(function () {
                        const item = $(this);
                        const value = item.find(".sold").text();
                        const max = item.find(".count").text();
                        let result = parseInt(value * 100) / parseInt(max);
                        result = parseFloat(result).toFixed(0);
                        if (!isFinite(result)) result = 0;
                        item.find(".progress__percent").attr("data-percent", result);
                        item.find(".progress__slider").attr("data-percentage", result);
                        item.find(".post__data").attr("data-percentage", result);
                    });
                    // Sends the data % text to the indicator
                    $(".progress__percent").each(function () {
                        var $this = $(this);
                        var percent = Number($this.data("percent"));
                        $this.find(".progress__span").html(percent + "%");
                    });
                    //Animate & Populate the slider bar::
                    $(".progress__slider").each(function () {
                        var t = $(this);
                        var barPercentage = t.data("percentage");
                        // add some "gimme" percentage when data-percentage is <2
                        if (parseInt(t.data("percentage"), 10) < 2) barPercentage = 2;
                        t.children(".progress__bar").animate(
                            {
                                width: barPercentage + "%"
                            },
                            500
                        );
                    });
                });
            </script>
        </div>
    </div>
    <div class="js-lottie w-embed w-script">
        <script>
            const anim1 = lottie.loadAnimation({
                container: document.getElementById("box"),
                renderer: "svg",
                loop: false,
                autoplay: false,
                path:
                    "https://cdn.statically.io/gist/moofawsaw/b8abeafe008f8b9ef040199c60a15162/raw/296dde84544ed1b41d5acfa303cca21c3ceee70f/lottie_box.json"
            });
            anim1.setSpeed(5);
            const anim2 = lottie.loadAnimation({
                container: document.getElementById("slider"),
                renderer: "svg",
                loop: false,
                autoplay: false,
                path: "https://cdn.statically.io/gist/moofawsaw/de2c253620930f2d582daceebff72665/raw/c5d7f528325aed481e6479da1c6921e62066de0b/lottie_sliders.json"
            });
            anim2.setSpeed(4);
            function toggle($el, anim) {
                $el.toggleClass("active");
                const open = $el.hasClass("active");
                $el
                    .closest(".button")
                    .find(".state")
                    .text(open ? "open" : "closed");
                const start = open ? 0 : 100;
                anim.playSegments([start, 100 - start], true);
            }
            function toggle_shuffle($el, anim) {
                $el.toggleClass("active");
                const open = $el.hasClass("active");
                $el
                    .closest(".button")
                    .find(".state")
                    .text(open ? "open" : "closed");
                const start = open ? 0 : 120;
                anim.playSegments([start, 120 - start], true);
            }
            function toggle_shuffle($el, anim) {
                $el.toggleClass("active");
                const open = $el.hasClass("active");
                $el
                    .closest(".button")
                    .find(".state")
                    .text(open ? "open" : "closed");
                const start = open ? 0 : 120;
                anim.playSegments([start, 120 - start], true);
            }
            let slider_direction = 1;
            function toggle_slider($el, anim) {
                $el.toggleClass("active");
                const open = $el.hasClass("active");
                $el
                    .closest(".button")
                    .find(".state")
                    .text(open ? "open" : "closed");
                const direction = open ? slider_direction : -slider_direction;
                anim.setDirection(direction);
                anim.play();
            }
            const anim3 = lottie.loadAnimation({
                container: document.getElementById("shuffle"),
                renderer: "svg",
                loop: false,
                autoplay: false,
                path: "https://cdn.statically.io/gist/moofawsaw/d009a2a791b03fbf37bca60de465e29c/raw/a87e77ea3362ba6f42cf65f86f0edbc37cb9f15b/lottie_shuffle.json"
            });
            anim3.setSpeed(12);
            $("#account, #notify, #cart").on("click", function () {
                if ($("#box").hasClass("active")) {
                    toggle($("#box"), anim1);
                }
            });
            $(".btn--grab").on("click", function () {
                var lottie = $(this).find("#box");
                toggle(lottie, anim1);
                if (lottie.hasClass("active") && $("#slider").hasClass("active"))
                    toggle_slider($("#slider"), anim2);
            });
            $(".btn--filters").on("click", function () {
                var lottie = $(this).find("#slider");
                toggle_slider(lottie, anim2);
                if (lottie.hasClass("active") && $("#box").hasClass("active"))
                    toggle($("#box"), anim1);
            });
            $(".btn--random").on("click", function () {
                var lottie = $(this).find("#shuffle");
                toggle_shuffle(lottie, anim3);
            });
        </script>
    </div>
    <div class="js-other w-embed w-script">
        <script>
            //Count the number of items showing::
            $(document).ready(function () {
                var count = $("[data-id='product']").length;
                $(this).find("#count_item >").text(count);
            });
            // Move the grab button while in mobile::
            function moveDiv() {
                if ($(window).width() < 479) {
                    $(".modal--grab").appendTo(".lottie__mobile");
                } else {
                    $(".modal--grab").prependTo("#mainsection");
                }
            }
            moveDiv();
            $(window).resize(moveDiv);
        </script>
    </div>
    <div class="js-filter-toggle w-embed w-script">
        <script>
            $(".filter__checkbox").change(function () {
                var label = $(this).closest("label");
                label.removeClass("checked");
                if ($(this).is(":checked")) {
                    label
                        .find(".filter__icon")
                        .css("font-family", "'Font awesome 5 pro solid 900',sans-serif")
                        .addClass("checked");
                    label.find(".filter__text").addClass("checked");
                    label.addClass("checked");
                } else {
                    label
                        .find(".filter__icon")
                        .css("font-family", "'Font awesome 5 pro 400',sans-serif")
                        .removeClass("checked");
                    label.find(".filter__text").removeClass("checked");
                    label.removeClass("checked");
                }
            });
        </script>
    </div>
</div>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=59de7f3f07bb6700016482bc" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
<script defer="" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="https://cdn.statically.io/gh/marcj/css-element-queries/master/src/ResizeSensor.js"></script>
<script type="text/javascript" src="https://cdn.statically.io/gh/marcj/css-element-queries/master/src/ElementQueries.js"></script>
<script defer="" type="text/javascript" src="https://cdn.statically.io/gist/moofawsaw/3cb619af99550c93319acdf9311e75fd/raw/ba46c67203eba51d1e97bbbaa193f1623d7b92e5/donorport-wish.js"></script>
<script defer="" type="text/javascript" src="https://cdn.statically.io/gist/moofawsaw/730ccf6060b9a166747cf95babbcb21a/raw/ad00404a7fc6b371153a8f18eba3a87ac5cc6a12/donorport-cartandgrab.js"></script>
<script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
<script>
    function setLight() {
        $("body").removeClass("dark-theme");
        $("body").addClass("light-theme");
    }
    function setDark() {
        $("body").addClass("dark-theme");
        $("body").removeClass("light-theme");
    }
    function setMode() {
        // have a variable to indicate what mode
        // we should apply at the end of the procedure
        let lightMode;
        // always unregister media listener,
        // because we only need it if mode is not set,
        // which then we'll have to read media queries using matchMedia
        unregisterMediaListener();
        switch (localStorage.getItem("mode")) {
            case 'light-theme': {
                lightMode = true;
                $("#light").prop("checked", true);
                break;
            }
            case 'dark-theme': {
                lightMode = false;
                $("#dark").prop("checked", true);
                break;
            }
            default: { // using system setting
                $("#default").prop("checked", true);
                // set lightMode indicator using the matchMedia query result
                lightMode = window.matchMedia("(prefers-color-scheme: light)").matches;
                // and register media change listener for changes
                registerMediaListener();
            }
        }
        // allpy new input values
        $('input[name="theme"]').change();
        // set the actual mode
        if (lightMode) {
            setLight();
        } else {
            setDark();
        }
    }
    let mm;
    function registerMediaListener() {
        mm = window.matchMedia("(prefers-color-scheme: light)");
        mm.addEventListener('change', onLightSchemeChange);
    }
    function unregisterMediaListener() {
        if (mm) mm.removeListener(onLightSchemeChange);
    }
    function onLightSchemeChange(scheme) {
        console.log('onMediachange', scheme, scheme.matches);
        if (scheme.matches) {
            // We have browser/system light mode
            setLight();
        } else {
            setDark();
        }
    }
    $(document).ready(function() {
        // Check the mode on load and style accordingly
        setMode();
        // add toggle
        $("#toggleTheme").on("click", function() {
            if ($("body").hasClass("dark-theme")) {
                localStorage.setItem("mode", "light-theme");
            } else {
                localStorage.setItem("mode", "dark-theme");
            }
            setMode();
        });
        $("#light").on("click", function() {
            localStorage.setItem("mode", "light-theme");
            setMode();
        });
        $("#dark").on("click", function() {
            localStorage.setItem("mode", "dark-theme");
            setMode();
        });
        $("#default").on("click", function() {
            localStorage.removeItem("mode");
            setMode();
        });
    });
    // For selecting radio
    $('input[name="theme"]').on("change", function() {
        if ($(this).is(":checked")) {
            $("label.checked").removeClass("checked");
            $(this).closest("label").addClass("checked");
        }
    });
    /*var radios = document.getElementsByName("theme");
var val = localStorage.getItem("state");
for (var i = 0; i < radios.length; i++) {
  if (radios[i].value == val) {
    radios[i].checked = true;
  }
}
*/
    //For selecting radio
    $('input[name="theme"]').on("change", function () {
        /* localStorage.setItem("state", $(this).val());*/
        if ($(this).is(":checked")) {
            $(".settings__theme > label.checked").removeClass("checked");
            $(this).closest("label").addClass("checked");
        }
    });
    //Has to be before </body> in order to work with two instances::
    $(".activate__input").on("keyup", function () {
        if ($(this).val()) {
            $(this).next().focus();
        }
    });
    $(".activate__input").on("keydown", function (e) {
        $(this).select();
        if ((e.which == 8 || e.which == 46) && $(this).val() == "") {
            $(this).prev("input").focus();
        }
    });
    $(".activate__input").on("paste", function (e) {
        e.preventDefault();
        var text = e.originalEvent.clipboardData.getData("text");
        var textArray = text.split("");
        $(".activate__input").each(function (index, element) {
            $(element).val(textArray[index]);
        });
    });
    $(function () {
        $(".input")
            .focus(function () {
                $(this).parent().addClass("input__animate");
            })
            .blur(function () {
                $(this).parent().removeClass("input__animate");
            });
    });
    document.addEventListener("DOMContentLoaded", function () {
        yall({
            observeChanges: true
        });
    });
    //For filter radios ::
    $(function () {
        var allRadios = $(".radio-toggles input[type='radio']");
        $(allRadios).click(function () {
            // reset all checkbox to original state
            allRadios.each(function (i, elm) {
                var icon = $(elm).closest("label").find(".toggle__icon");
                icon.css("font-family", "'Font awesome 5 pro 400',sans-serif");
                $(elm).closest("label").removeClass("checked");
            });
            // change the checked checkbox's icon
            $(this)
                .closest("label")
                .find(".toggle__icon")
                .css("font-family", "'Font awesome 5 pro solid 900',sans-serif");
            $(this).closest("label").addClass("checked");
        });
    });
    // Add ".digits();" to end of text string to use thousands seperator.
    $.fn.digits = function () {
        return this.each(function () {
            $(this).text(
                $(this)
                    .text()
                    .replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")
            );
        });
    };
    // Toggling the account menu's
    $("[data-id='trigger']").click(function (e) {
        const dataClose = $(this).attr("data-close");
        const elem = $('[data-id="' + dataClose + '"]').length
            ? $('[data-id="' + dataClose + '"]')
            : $(dataClose);
        if (elem.hasClass("active") && elem.is(":visible")) {
            elem.removeClass("active");
        } else {
            const id = $(this).prop("id");
            $(".modal").each(function () {
                $(this).toggleClass("active", $(this).data("id") == id);
            });
        }
        //Toggles the two modals in mobile mode and hides the search if open
        if (
            ($(window).width() <= 479 &&
                elem.hasClass("modal--grab") &&
                elem.hasClass("active")) ||
            ($(window).width() <= 479 &&
                elem.hasClass("modal--filters") &&
                elem.hasClass("active"))
        ) {
            $(".scroll").scrollTop(0);
            $(".scroll").css("overflow", "hidden");
            $(".bar--header, .lottie__mobile").css("height", "100%");
        } else {
            $(".scroll").css("overflow", "auto");
            $(".bar--header").css("height", "auto");
            $(".lottie__mobile").css("height", "0px");
        }
        if (
            $(window).width() <= 479 &&
            elem.hasClass("modal--grab") &&
            elem.hasClass("active")
        ) {
            $(".bar__search").css("display", "none");
        } else {
            $(".bar__search").css("display", "flex");
        }
    });
    $(window).bind("load resize", function () {
        var modalDiv = $(".modal--grab, .modal--filters");
        var quickDiv = $(".modal--grab");
        var isModalActive = modalDiv.hasClass("active");
        var isQuickActive = quickDiv.hasClass("active");
        var windowWidth = $(window).width();
        if (isModalActive && windowWidth <= 479) {
            $(".scroll").scrollTop(0);
            $(".scroll").css("overflow", "hidden");
            $(".bar--header, .lottie__mobile").css("height", "100%");
        } else {
            $(".scroll").css("overflow", "auto");
            $(".bar--header").css("height", "auto");
            $(".lottie__mobile").css("height", "0px");
        }
        if (isQuickActive && windowWidth <= 479) {
            $(".bar__search").css("display", "none");
        } else {
            $(".bar__search").css("display", "flex");
        }
    });
    //Clicking away closes menu//
    //Note that the !$() part of the function is for toggling between menu's that are open I think.
    function toggleMenu(e) {
        if (
            /*This staement allows you click body and the modal listed here closes*/
            $(".modal--account").hasClass("active") &&
            // Don't close modal if these are clicked::
            !$(".modal, .modal *, [data-id='trigger'], .theme__toggle").is(e.target)
        ) {
            $(".modal").removeClass("active");
        }
    }
    $(function (e) {
        $(document).click(toggleMenu);
    });
    $(document).ready(function () {
        $(".qty").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if (
                $.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                // Allow: Ctrl/cmd+A
                (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                // Allow: Ctrl/cmd+C
                (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
                // Allow: Ctrl/cmd+X
                (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
                // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)
            ) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if (
                (e.shiftKey || e.keyCode < 48 || e.keyCode > 57) &&
                (e.keyCode < 96 || e.keyCode > 105)
            ) {
                e.preventDefault();
            }
        });
    });
    $(document).on("click", "[data-animate='ripple']", function (b) {
        var d = $('<span class="rippling" />'),
            f = $(this),
            g = f.offset(),
            h = b.pageX - g.left,
            j = b.pageY - g.top,
            k = parseInt(Math.max(f.innerWidth(), f.innerHeight()) * Math.PI);
        d.css({
            top: j,
            left: h,
            width: 1,
            height: 1,
            backgroundColor: f.attr("ripple-color"),
            opacity: f.attr("ripple-opacity")
        })
            .appendTo(f)
            .animate({ width: k, height: k, opacity: 0 }, 500, function () {
                $(this).remove();
            });
    });
    //For Follow / Notify Button animation on item / project / org pages
    $('input[name="notify"]').change(function () {
        var icon = $(this).closest(".notify__label").find(".notify__icon--follow");
        if ($(this).is(":checked")) {
            //found the icon, now change it to solid & bell-on:
            icon.addClass("checked");
            icon.css("font-family", "'Font awesome 5 pro solid 900',sans-serif");
            icon.html("");
        } else {
            icon.removeClass("checked");
            icon.css("font-family", "'Font awesome 5 pro 400',sans-serif");
            icon.html("");
        }
    });
    //Open child slide when menu item is clicked:
    $(".modal").on("click", "#open_wish", function () {
        setTimeout(function () {
            $(".modal__slide--wish").css("display", "flex"),
                $(".modal__slide--account").css("display", "none");
        }, 500);
    }),
        $(".modal").on("click", "#back_wish", function () {
            $(".modal__slide--wish").css("display", "none"),
                $(".modal__slide--account").css("display", "flex");
        }),
        $(".modal").on("click", "#open_settings", function () {
            setTimeout(function () {
                $(".modal__slide--settings").css("display", "flex"),
                    $(".modal__slide--account").css("display", "none");
            }, 500);
        }),
        $(".modal").on("click", "#back_settings", function () {
            $(".modal__slide--settings").css("display", "none"),
                $(".modal__slide--account").css("display", "flex");
        }),
        $(".modal").on("click", "#open_org", function () {
            setTimeout(function () {
                $(".modal__slide--org").css("display", "flex"),
                    $(".modal__slide--account").css("display", "none");
            }, 500);
        }),
        $(".modal").on("click", "#back_org", function () {
            $(".modal__slide--org").css("display", "none"),
                $(".modal__slide--account").css("display", "flex");
        });
    //This is for the slides inside of the activity modal::
    /* Opens  push for admin page*/
    $(".modal").on("click", "#open_push", function () {
        setTimeout(function () {
            $(".modal__slide--push").css("display", "flex"),
                $(".modal__slide--alerts").css("display", "none");
        }, 500);
    });
    $(".modal").on("click", "#back_push", function () {
        $(".modal__slide--push").css("display", "none"),
            $(".modal__slide--alerts").css("display", "flex");
    });
    /* Opens  push for all other pages*/
    $(".modal").on("click", "#open_push", function () {
        setTimeout(function () {
            $(".modal__slide--push").css("display", "flex"),
                $(".modal__slide--activity").css("display", "none");
        }, 500);
    }),
        $(".modal").on("click", "#back_push", function () {
            $(".modal__slide--push").css("display", "none"),
                $(".modal__slide--activity").css("display", "flex");
        });
    $(".modal").on("click", "#open_follow", function () {
        setTimeout(function () {
            $(".modal__slide--follow").css("display", "flex"),
                $(".modal__slide--activity").css("display", "none");
        }, 500);
    }),
        $(".modal").on("click", "#back_follow", function () {
            $(".modal__slide--follow").css("display", "none"),
                $(".modal__slide--activity").css("display", "flex");
        });
    // This is required as the account modal has the quick setting for locations.
    $(".locations__list :input").on("click", function () {
        function darkness(color) {
            color.replace(/^\D+|\)/g, "").trim();
            //console.log(color);
            var rgb = color.split(",");
            //console.log(rgb);
            var final =
                parseInt(rgb[0], 10) + parseInt(rgb[1], 10) + parseInt(rgb[2], 10);
            //console.log(final);
            if (final < 384) {
                return false;
            }
            return true;
        }
        var label = $(this).next("label");
        var dot = label.find(".dot");
        var tagbox = $(this).closest("[data-type='tagbox']");
        var cancel = label.find(".cancel--tagbox");
        var color = label.data("rgb");
        var rgb = `rgb(${color})`;
        var contrast = darkness(color) ? "#202124" : "#fdfdfd";
        if (this.checked) {
            cancel.css("color", contrast);
            cancel.toggleClass("on off");
            dot.toggleClass("off on");
            tagbox.css({
                "background-color": rgb,
                color: contrast,
                "border-color": rgb,
                color: contrast
            });
        } else {
            dot.toggleClass("off on");
            cancel.toggleClass("on off");
            tagbox.css({
                "background-color": "#ffffff00",
                color: "",
                "border-color": ""
            });
        }
    });
    /*
$(document)
  .one("focus.char-textarea", "textarea.char-textarea", function () {
    var savedValue = this.value;
    this.value = "";
    this.baseScrollHeight = this.scrollHeight;
    this.value = savedValue;
  })
  .on("input.char-textarea", "textarea.char-textarea", function () {
    var minRows = this.getAttribute("data-min-rows") | 0,
      rows;
    this.rows = minRows;
    rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 16);
    this.rows = minRows + rows;
  });
$(".char-textarea").on("keyup", function (event) {
  checkTextAreaMaxLength(this, event);
});
function checkTextAreaMaxLength(textBox, e) {
  var maxLength = parseInt($(textBox).data("length"));
  if (!checkSpecialKeys(e)) {
    if (textBox.value.length > maxLength - 1)
      textBox.value = textBox.value.substring(0, maxLength);
  }
  $(".char-count").html(maxLength - textBox.value.length);
  return true;
}
function checkSpecialKeys(e) {
  if (
    e.keyCode != 8 &&
    e.keyCode != 46 &&
    e.keyCode != 37 &&
    e.keyCode != 38 &&
    e.keyCode != 39 &&
    e.keyCode != 40
  )
    return false;
  else return true;
}
*/
    /*
//For filter selections tags?
var dataArray = new Array();
var locArray = new Array();
var projArray = new Array();
$(".item__tile").each(function () {
  dataArray.push($(this).data("sub"));
  locArray.push($(this).data("platform"));
  projArray.push($(this).data("refine"));
});
$(".cat-button").each(function () {
  $this = $(this);
  if ($.inArray($this.data("rel"), dataArray) === -1) {
    $this.closest(".maincategory__item").hide();
  }
});
$(".loc-check").each(function () {
  $this = $(this);
  if ($.inArray($this.data("type"), locArray) === -1) {
    $this.closest(".locations__item").hide();
  }
});
$(".rad").each(function () {
  $this = $(this);
  if ($.inArray($this.attr("id"), projArray) === -1) {
    $this.closest(".project__item").remove();
  }
});
*/
    /*$(function () {
  $(".form").on("keydown", ".form__input--number", function (e) {
    -1 !== $.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) ||
      (/65|67|86|88/.test(e.keyCode) &&
        (e.ctrlKey === true || e.metaKey === true) &&
        (!0 === e.ctrlKey || !0 === e.metaKey)) ||
      (35 <= e.keyCode && 40 >= e.keyCode) ||
      ((e.shiftKey || 48 > e.keyCode || 57 < e.keyCode) &&
        (96 > e.keyCode || 105 < e.keyCode) &&
        e.preventDefault());
  });
});
*/
    // init Weglot
    Weglot.initialize({
        api_key: 'wg_d927314c7ce8ea9b9a1fa9f5e201f6d39'
    });
    // on Weglot init
    Weglot.on('initialized', ()=>{
        // get the current active language
        const currentLang = Weglot.getCurrentLang();
        // if the current active language link exists
        if(document.querySelector('.wg-element-wrapper.sw3 [lang='+currentLang+']')){
            // click the link
            document.querySelector('.wg-element-wrapper.sw3 [lang='+currentLang+']').click();
        }
    });
    // for each of the .wg-element-wrapper language links
    document.querySelectorAll('.wg-element-wrapper.sw3 [lang]').forEach((link)=>{
        // add a click event listener
        link.addEventListener('click', function(e){
            // prevent default
            e.preventDefault();
            // switch current active language after a setTimeout
            setTimeout(()=>Weglot.switchTo(this.getAttribute('lang')),400);
        });
    });
</script>
<script defer="" type="text/javascript" src="https://cdn.statically.io/gist/moofawsaw/36b4e4c55faff40e9e740d6df499fb3e/raw/cb4f12ec38219b78f8aa8e705347d863e92ea5f2/donorport-autofill.js"></script>
<script defer="" type="text/javascript" src="https://cdn.statically.io/gist/moofawsaw/403ed5c69e40c917eb09e2a98874ed25/raw/c83ef9517a760f8e658c6d686a73f7b73171b849/donorport-tags.js"></script>
<script>
    $(document).ready(function () {
        new AutoNumeric('.grab__input--bulk', {
            allowDecimalPadding: false,
            currencySymbol: "$",
            emptyInputBehavior: "zero"
        });
    });
    function moveDiv() {
        if ($(window).width() < 479) {
            $('.modal--grab, .modal--filters').appendTo('.lottie__mobile');
        } else {
            $('.modal--grab, .modal--filters').prependTo('#mainsection');
        }
    }
    moveDiv();
    $(window).resize(moveDiv);
    if ($(".modal--filters").hasClass("active")) {
        $(".scroll").css("overflow", "hidden");
    }
</script>
</body>
</html>
