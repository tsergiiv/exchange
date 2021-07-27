Vue.component('niceselect', {
  props: ['options', 'value'],
  template: '#niceSelect-template',
  mounted: function () {
    var vm = this
    $(this.$el)
      .niceSelect()
      .val(vm.value)
      .niceSelect('update')
      .on('change', function () {
        vm.$emit('input', this.value)
      })
  },
  watch: {
    value: function (value) {
        $(this.$el).val(value);
        $(this.$el).niceSelect('update');
    },
    options: function (options) {
        for(var i in options) {
            $(this.$el).append(new Option(options[i].name, options[i].code));
        }
        $(this.$el).niceSelect('update');
    }
  },
  destroyed: function () {
    $(this.$el).off().niceSelect('destroy');
  }
})
Vue.prototype.$lazyLoadInstance = window.lazyLoadInstance;
var vMainpage = new Vue({
    el: '#topPage',
    data () {
        return {
          contry_name: '',
          exchanges: [],
          exchanges_bassed: {
            'Binance' : {
              value: 'Cayman Islands',
              flag: 'https://restcountries.eu/data/cym.svg'
            },
            'luno' : {
              value: 'United Kingdom',
              flag: 'https://restcountries.eu/data/ggy.svg'
            },
            'kraken' : {
              value: 'United States',
              flag: 'https://restcountries.eu/data/usa.svg'
            },
            'Coinbase' : {
              value: 'United States',
              flag: 'https://restcountries.eu/data/usa.svg'
            },
            'crypto_com' : {
              value: 'Hong Kong',
              flag: 'https://restcountries.eu/data/hkg.svg'
            },
            'blockchaincom' : {
              value: 'Luxembourg',
              flag: 'https://restcountries.eu/data/lux.svg'
            },
            'eToro' : {
              value: 'Cyprus',
              flag: 'https://restcountries.eu/data/cyp.svg'
            },
            'kucoin' : {
              value: 'Seychelles',
              flag: 'https://restcountries.eu/data/syc.svg'
            },
            'gateio' : {
              value: 'Cayman Islands',
              flag: 'https://restcountries.eu/data/cym.svg'
            },
            'gdax' : {
              value: 'United States',
              flag: 'https://restcountries.eu/data/usa.svg'
            },
            'gate' : {
              value: 'Cayman Islands',
              flag: 'https://restcountries.eu/data/cym.svg'
            },
          },
          promo: {
            'Binance' : true,
            'luno' : true,
            'kraken' : false,
            'Coinbase' : true,
            'crypto_com' : true,
            'blockchaincom' : true,
            'eToro' : true,
            'kucoin' : true,
            'gateio' : true,
            'gdax' : true,
            'gate' : true
          },
          promo_check: true,
          countrys: [{"value":"AF","name":"Afghanistan"},{"value":"AX","name":"Åland Islands"},{"value":"AL","name":"Albania"},{"value":"DZ","name":"Algeria"},{"value":"AS","name":"American Samoa"},{"value":"AD","name":"Andorra"},{"value":"AO","name":"Angola"},{"value":"AI","name":"Anguilla"},{"value":"AQ","name":"Antarctica"},{"value":"AG","name":"Antigua and Barbuda"},{"value":"AR","name":"Argentina"},{"value":"AM","name":"Armenia"},{"value":"AW","name":"Aruba"},{"value":"AU","name":"Australia"},{"value":"AT","name":"Austria"},{"value":"AZ","name":"Azerbaijan"},{"value":"BS","name":"Bahamas"},{"value":"BH","name":"Bahrain"},{"value":"BD","name":"Bangladesh"},{"value":"BB","name":"Barbados"},{"value":"BY","name":"Belarus"},{"value":"BE","name":"Belgium"},{"value":"BZ","name":"Belize"},{"value":"BJ","name":"Benin"},{"value":"BM","name":"Bermuda"},{"value":"BT","name":"Bhutan"},{"value":"BO","name":"Bolivia (Plurinational State of)"},{"value":"BQ","name":"Bonaire, Sint Eustatius and Saba"},{"value":"BA","name":"Bosnia and Herzegovina"},{"value":"BW","name":"Botswana"},{"value":"BV","name":"Bouvet Island"},{"value":"BR","name":"Brazil"},{"value":"IO","name":"British Indian Ocean Territory"},{"value":"UM","name":"United States Minor Outlying Islands"},{"value":"VG","name":"Virgin Islands (British)"},{"value":"VI","name":"Virgin Islands (U.S.)"},{"value":"BN","name":"Brunei Darussalam"},{"value":"BG","name":"Bulgaria"},{"value":"BF","name":"Burkina Faso"},{"value":"BI","name":"Burundi"},{"value":"KH","name":"Cambodia"},{"value":"CM","name":"Cameroon"},{"value":"CA","name":"Canada"},{"value":"CV","name":"Cabo Verde"},{"value":"KY","name":"Cayman Islands"},{"value":"CF","name":"Central African Republic"},{"value":"TD","name":"Chad"},{"value":"CL","name":"Chile"},{"value":"CN","name":"China"},{"value":"CX","name":"Christmas Island"},{"value":"CC","name":"Cocos (Keeling) Islands"},{"value":"CO","name":"Colombia"},{"value":"KM","name":"Comoros"},{"value":"CG","name":"Congo"},{"value":"CD","name":"Congo (Democratic Republic of the)"},{"value":"CK","name":"Cook Islands"},{"value":"CR","name":"Costa Rica"},{"value":"HR","name":"Croatia"},{"value":"CU","name":"Cuba"},{"value":"CW","name":"Curaçao"},{"value":"CY","name":"Cyprus"},{"value":"CZ","name":"Czech Republic"},{"value":"DK","name":"Denmark"},{"value":"DJ","name":"Djibouti"},{"value":"DM","name":"Dominica"},{"value":"DO","name":"Dominican Republic"},{"value":"EC","name":"Ecuador"},{"value":"EG","name":"Egypt"},{"value":"SV","name":"El Salvador"},{"value":"GQ","name":"Equatorial Guinea"},{"value":"ER","name":"Eritrea"},{"value":"EE","name":"Estonia"},{"value":"ET","name":"Ethiopia"},{"value":"FK","name":"Falkland Islands (Malvinas)"},{"value":"FO","name":"Faroe Islands"},{"value":"FJ","name":"Fiji"},{"value":"FI","name":"Finland"},{"value":"FR","name":"France"},{"value":"GF","name":"French Guiana"},{"value":"PF","name":"French Polynesia"},{"value":"TF","name":"French Southern Territories"},{"value":"GA","name":"Gabon"},{"value":"GM","name":"Gambia"},{"value":"GE","name":"Georgia"},{"value":"DE","name":"Germany"},{"value":"GH","name":"Ghana"},{"value":"GI","name":"Gibraltar"},{"value":"GR","name":"Greece"},{"value":"GL","name":"Greenland"},{"value":"GD","name":"Grenada"},{"value":"GP","name":"Guadeloupe"},{"value":"GU","name":"Guam"},{"value":"GT","name":"Guatemala"},{"value":"GG","name":"Guernsey"},{"value":"GN","name":"Guinea"},{"value":"GW","name":"Guinea-Bissau"},{"value":"GY","name":"Guyana"},{"value":"HT","name":"Haiti"},{"value":"HM","name":"Heard Island and McDonald Islands"},{"value":"VA","name":"Holy See"},{"value":"HN","name":"Honduras"},{"value":"HK","name":"Hong Kong"},{"value":"HU","name":"Hungary"},{"value":"IS","name":"Iceland"},{"value":"IN","name":"India"},{"value":"ID","name":"Indonesia"},{"value":"CI","name":"Côte d'Ivoire"},{"value":"IR","name":"Iran (Islamic Republic of)"},{"value":"IQ","name":"Iraq"},{"value":"IE","name":"Ireland"},{"value":"IM","name":"Isle of Man"},{"value":"IL","name":"Israel"},{"value":"IT","name":"Italy"},{"value":"JM","name":"Jamaica"},{"value":"JP","name":"Japan"},{"value":"JE","name":"Jersey"},{"value":"JO","name":"Jordan"},{"value":"KZ","name":"Kazakhstan"},{"value":"KE","name":"Kenya"},{"value":"KI","name":"Kiribati"},{"value":"KW","name":"Kuwait"},{"value":"KG","name":"Kyrgyzstan"},{"value":"LA","name":"Lao People's Democratic Republic"},{"value":"LV","name":"Latvia"},{"value":"LB","name":"Lebanon"},{"value":"LS","name":"Lesotho"},{"value":"LR","name":"Liberia"},{"value":"LY","name":"Libya"},{"value":"LI","name":"Liechtenstein"},{"value":"LT","name":"Lithuania"},{"value":"LU","name":"Luxembourg"},{"value":"MO","name":"Macao"},{"value":"MK","name":"Macedonia (the former Yugoslav Republic of)"},{"value":"MG","name":"Madagascar"},{"value":"MW","name":"Malawi"},{"value":"MY","name":"Malaysia"},{"value":"MV","name":"Maldives"},{"value":"ML","name":"Mali"},{"value":"MT","name":"Malta"},{"value":"MH","name":"Marshall Islands"},{"value":"MQ","name":"Martinique"},{"value":"MR","name":"Mauritania"},{"value":"MU","name":"Mauritius"},{"value":"YT","name":"Mayotte"},{"value":"MX","name":"Mexico"},{"value":"FM","name":"Micronesia (Federated States of)"},{"value":"MD","name":"Moldova (Republic of)"},{"value":"MC","name":"Monaco"},{"value":"MN","name":"Mongolia"},{"value":"ME","name":"Montenegro"},{"value":"MS","name":"Montserrat"},{"value":"MA","name":"Morocco"},{"value":"MZ","name":"Mozambique"},{"value":"MM","name":"Myanmar"},{"value":"NA","name":"Namibia"},{"value":"NR","name":"Nauru"},{"value":"NP","name":"Nepal"},{"value":"NL","name":"Netherlands"},{"value":"NC","name":"New Caledonia"},{"value":"NZ","name":"New Zealand"},{"value":"NI","name":"Nicaragua"},{"value":"NE","name":"Niger"},{"value":"NG","name":"Nigeria"},{"value":"NU","name":"Niue"},{"value":"NF","name":"Norfolk Island"},{"value":"KP","name":"Korea (Democratic People's Republic of)"},{"value":"MP","name":"Northern Mariana Islands"},{"value":"NO","name":"Norway"},{"value":"OM","name":"Oman"},{"value":"PK","name":"Pakistan"},{"value":"PW","name":"Palau"},{"value":"PS","name":"Palestine, State of"},{"value":"PA","name":"Panama"},{"value":"PG","name":"Papua New Guinea"},{"value":"PY","name":"Paraguay"},{"value":"PE","name":"Peru"},{"value":"PH","name":"Philippines"},{"value":"PN","name":"Pitcairn"},{"value":"PL","name":"Poland"},{"value":"PT","name":"Portugal"},{"value":"PR","name":"Puerto Rico"},{"value":"QA","name":"Qatar"},{"value":"XK","name":"Republic of Kosovo"},{"value":"RE","name":"Réunion"},{"value":"RO","name":"Romania"},{"value":"RU","name":"Russian Federation"},{"value":"RW","name":"Rwanda"},{"value":"BL","name":"Saint Barthélemy"},{"value":"SH","name":"Saint Helena, Ascension and Tristan da Cunha"},{"value":"KN","name":"Saint Kitts and Nevis"},{"value":"LC","name":"Saint Lucia"},{"value":"MF","name":"Saint Martin (French part)"},{"value":"PM","name":"Saint Pierre and Miquelon"},{"value":"VC","name":"Saint Vincent and the Grenadines"},{"value":"WS","name":"Samoa"},{"value":"SM","name":"San Marino"},{"value":"ST","name":"Sao Tome and Principe"},{"value":"SA","name":"Saudi Arabia"},{"value":"SN","name":"Senegal"},{"value":"RS","name":"Serbia"},{"value":"SC","name":"Seychelles"},{"value":"SL","name":"Sierra Leone"},{"value":"SG","name":"Singapore"},{"value":"SX","name":"Sint Maarten (Dutch part)"},{"value":"SK","name":"Slovakia"},{"value":"SI","name":"Slovenia"},{"value":"SB","name":"Solomon Islands"},{"value":"SO","name":"Somalia"},{"value":"ZA","name":"South Africa"},{"value":"GS","name":"South Georgia and the South Sandwich Islands"},{"value":"KR","name":"Korea (Republic of)"},{"value":"SS","name":"South Sudan"},{"value":"ES","name":"Spain"},{"value":"LK","name":"Sri Lanka"},{"value":"SD","name":"Sudan"},{"value":"SR","name":"Suriname"},{"value":"SJ","name":"Svalbard and Jan Mayen"},{"value":"SZ","name":"Swaziland"},{"value":"SE","name":"Sweden"},{"value":"CH","name":"Switzerland"},{"value":"SY","name":"Syrian Arab Republic"},{"value":"TW","name":"Taiwan"},{"value":"TJ","name":"Tajikistan"},{"value":"TZ","name":"Tanzania, United Republic of"},{"value":"TH","name":"Thailand"},{"value":"TL","name":"Timor-Leste"},{"value":"TG","name":"Togo"},{"value":"TK","name":"Tokelau"},{"value":"TO","name":"Tonga"},{"value":"TT","name":"Trinidad and Tobago"},{"value":"TN","name":"Tunisia"},{"value":"TR","name":"Turkey"},{"value":"TM","name":"Turkmenistan"},{"value":"TC","name":"Turks and Caicos Islands"},{"value":"TV","name":"Tuvalu"},{"value":"UG","name":"Uganda"},{"value":"UA","name":"Ukraine"},{"value":"AE","name":"United Arab Emirates"},{"value":"GB","name":"United Kingdom of Great Britain and Northern Ireland"},{"value":"US","name":"United States of America"},{"value":"UY","name":"Uruguay"},{"value":"UZ","name":"Uzbekistan"},{"value":"VU","name":"Vanuatu"},{"value":"VE","name":"Venezuela (Bolivarian Republic of)"},{"value":"VN","name":"Viet Nam"},{"value":"WF","name":"Wallis and Futuna"},{"value":"EH","name":"Western Sahara"},{"value":"YE","name":"Yemen"},{"value":"ZM","name":"Zambia"},{"value":"ZW","name":"Zimbabwe"}],
          selected_country: '',
          options_currencys: [{"value":"AF","name":"Afghan afghani","code":"AFN","flag":"https://restcountries.eu/data/afg.svg"},{"value":"AX","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/ala.svg"},{"value":"AL","name":"Albanian lek","code":"ALL","flag":"https://restcountries.eu/data/alb.svg"},{"value":"DZ","name":"Algerian dinar","code":"DZD","flag":"https://restcountries.eu/data/dza.svg"},{"value":"AS","name":"United State Dollar","code":"USD","flag":"https://restcountries.eu/data/asm.svg"},{"value":"AD","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/and.svg"},{"value":"AO","name":"Angolan kwanza","code":"AOA","flag":"https://restcountries.eu/data/ago.svg"},{"value":"AI","name":"East Caribbean dollar","code":"XCD","flag":"https://restcountries.eu/data/aia.svg"},{"value":"AQ","name":"Australian dollar","code":"AUD","flag":"https://restcountries.eu/data/ata.svg"},{"value":"AG","name":"East Caribbean dollar","code":"XCD","flag":"https://restcountries.eu/data/atg.svg"},{"value":"AR","name":"Argentine peso","code":"ARS","flag":"https://restcountries.eu/data/arg.svg"},{"value":"AM","name":"Armenian dram","code":"AMD","flag":"https://restcountries.eu/data/arm.svg"},{"value":"AW","name":"Aruban florin","code":"AWG","flag":"https://restcountries.eu/data/abw.svg"},{"value":"AU","name":"Australian dollar","code":"AUD","flag":"https://restcountries.eu/data/aus.svg"},{"value":"AT","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/aut.svg"},{"value":"AZ","name":"Azerbaijani manat","code":"AZN","flag":"https://restcountries.eu/data/aze.svg"},{"value":"BS","name":"Bahamian dollar","code":"BSD","flag":"https://restcountries.eu/data/bhs.svg"},{"value":"BH","name":"Bahraini dinar","code":"BHD","flag":"https://restcountries.eu/data/bhr.svg"},{"value":"BD","name":"Bangladeshi taka","code":"BDT","flag":"https://restcountries.eu/data/bgd.svg"},{"value":"BB","name":"Barbadian dollar","code":"BBD","flag":"https://restcountries.eu/data/brb.svg"},{"value":"BY","name":"New Belarusian ruble","code":"BYN","flag":"https://restcountries.eu/data/blr.svg"},{"value":"BE","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/bel.svg"},{"value":"BZ","name":"Belize dollar","code":"BZD","flag":"https://restcountries.eu/data/blz.svg"},{"value":"BJ","name":"West African CFA franc","code":"XOF","flag":"https://restcountries.eu/data/ben.svg"},{"value":"BM","name":"Bermudian dollar","code":"BMD","flag":"https://restcountries.eu/data/bmu.svg"},{"value":"BT","name":"Bhutanese ngultrum","code":"BTN","flag":"https://restcountries.eu/data/btn.svg"},{"value":"BO","name":"Bolivian boliviano","code":"BOB","flag":"https://restcountries.eu/data/bol.svg"},{"value":"BQ","name":"United States dollar","code":"USD","flag":"https://restcountries.eu/data/bes.svg"},{"value":"BA","name":"Bosnia and Herzegovina convertible mark","code":"BAM","flag":"https://restcountries.eu/data/bih.svg"},{"value":"BW","name":"Botswana pula","code":"BWP","flag":"https://restcountries.eu/data/bwa.svg"},{"value":"BV","name":"Norwegian krone","code":"NOK","flag":"https://restcountries.eu/data/bvt.svg"},{"value":"BR","name":"Brazilian real","code":"BRL","flag":"https://restcountries.eu/data/bra.svg"},{"value":"IO","name":"United States dollar","code":"USD","flag":"https://restcountries.eu/data/iot.svg"},{"value":"UM","name":"United States Dollar","code":"USD","flag":"https://restcountries.eu/data/umi.svg"},{"value":"VG","name":"[D]","code":null,"flag":"https://restcountries.eu/data/vgb.svg"},{"value":"VI","name":"United States dollar","code":"USD","flag":"https://restcountries.eu/data/vir.svg"},{"value":"BN","name":"Brunei dollar","code":"BND","flag":"https://restcountries.eu/data/brn.svg"},{"value":"BG","name":"Bulgarian lev","code":"BGN","flag":"https://restcountries.eu/data/bgr.svg"},{"value":"BF","name":"West African CFA franc","code":"XOF","flag":"https://restcountries.eu/data/bfa.svg"},{"value":"BI","name":"Burundian franc","code":"BIF","flag":"https://restcountries.eu/data/bdi.svg"},{"value":"KH","name":"Cambodian riel","code":"KHR","flag":"https://restcountries.eu/data/khm.svg"},{"value":"CM","name":"Central African CFA franc","code":"XAF","flag":"https://restcountries.eu/data/cmr.svg"},{"value":"CA","name":"Canadian dollar","code":"CAD","flag":"https://restcountries.eu/data/can.svg"},{"value":"CV","name":"Cape Verdean escudo","code":"CVE","flag":"https://restcountries.eu/data/cpv.svg"},{"value":"KY","name":"Cayman Islands dollar","code":"KYD","flag":"https://restcountries.eu/data/cym.svg"},{"value":"CF","name":"Central African CFA franc","code":"XAF","flag":"https://restcountries.eu/data/caf.svg"},{"value":"TD","name":"Central African CFA franc","code":"XAF","flag":"https://restcountries.eu/data/tcd.svg"},{"value":"CL","name":"Chilean peso","code":"CLP","flag":"https://restcountries.eu/data/chl.svg"},{"value":"CN","name":"Chinese yuan","code":"CNY","flag":"https://restcountries.eu/data/chn.svg"},{"value":"CX","name":"Australian dollar","code":"AUD","flag":"https://restcountries.eu/data/cxr.svg"},{"value":"CC","name":"Australian dollar","code":"AUD","flag":"https://restcountries.eu/data/cck.svg"},{"value":"CO","name":"Colombian peso","code":"COP","flag":"https://restcountries.eu/data/col.svg"},{"value":"KM","name":"Comorian franc","code":"KMF","flag":"https://restcountries.eu/data/com.svg"},{"value":"CG","name":"Central African CFA franc","code":"XAF","flag":"https://restcountries.eu/data/cog.svg"},{"value":"CD","name":"Congolese franc","code":"CDF","flag":"https://restcountries.eu/data/cod.svg"},{"value":"CK","name":"New Zealand dollar","code":"NZD","flag":"https://restcountries.eu/data/cok.svg"},{"value":"CR","name":"Costa Rican colón","code":"CRC","flag":"https://restcountries.eu/data/cri.svg"},{"value":"HR","name":"Croatian kuna","code":"HRK","flag":"https://restcountries.eu/data/hrv.svg"},{"value":"CU","name":"Cuban convertible peso","code":"CUC","flag":"https://restcountries.eu/data/cub.svg"},{"value":"CW","name":"Netherlands Antillean guilder","code":"ANG","flag":"https://restcountries.eu/data/cuw.svg"},{"value":"CY","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/cyp.svg"},{"value":"CZ","name":"Czech koruna","code":"CZK","flag":"https://restcountries.eu/data/cze.svg"},{"value":"DK","name":"Danish krone","code":"DKK","flag":"https://restcountries.eu/data/dnk.svg"},{"value":"DJ","name":"Djiboutian franc","code":"DJF","flag":"https://restcountries.eu/data/dji.svg"},{"value":"DM","name":"East Caribbean dollar","code":"XCD","flag":"https://restcountries.eu/data/dma.svg"},{"value":"DO","name":"Dominican peso","code":"DOP","flag":"https://restcountries.eu/data/dom.svg"},{"value":"EC","name":"United States dollar","code":"USD","flag":"https://restcountries.eu/data/ecu.svg"},{"value":"EG","name":"Egyptian pound","code":"EGP","flag":"https://restcountries.eu/data/egy.svg"},{"value":"SV","name":"United States dollar","code":"USD","flag":"https://restcountries.eu/data/slv.svg"},{"value":"GQ","name":"Central African CFA franc","code":"XAF","flag":"https://restcountries.eu/data/gnq.svg"},{"value":"ER","name":"Eritrean nakfa","code":"ERN","flag":"https://restcountries.eu/data/eri.svg"},{"value":"EE","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/est.svg"},{"value":"ET","name":"Ethiopian birr","code":"ETB","flag":"https://restcountries.eu/data/eth.svg"},{"value":"FK","name":"Falkland Islands pound","code":"FKP","flag":"https://restcountries.eu/data/flk.svg"},{"value":"FO","name":"Danish krone","code":"DKK","flag":"https://restcountries.eu/data/fro.svg"},{"value":"FJ","name":"Fijian dollar","code":"FJD","flag":"https://restcountries.eu/data/fji.svg"},{"value":"FI","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/fin.svg"},{"value":"FR","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/fra.svg"},{"value":"GF","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/guf.svg"},{"value":"PF","name":"CFP franc","code":"XPF","flag":"https://restcountries.eu/data/pyf.svg"},{"value":"TF","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/atf.svg"},{"value":"GA","name":"Central African CFA franc","code":"XAF","flag":"https://restcountries.eu/data/gab.svg"},{"value":"GM","name":"Gambian dalasi","code":"GMD","flag":"https://restcountries.eu/data/gmb.svg"},{"value":"GE","name":"Georgian Lari","code":"GEL","flag":"https://restcountries.eu/data/geo.svg"},{"value":"DE","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/deu.svg"},{"value":"GH","name":"Ghanaian cedi","code":"GHS","flag":"https://restcountries.eu/data/gha.svg"},{"value":"GI","name":"Gibraltar pound","code":"GIP","flag":"https://restcountries.eu/data/gib.svg"},{"value":"GR","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/grc.svg"},{"value":"GL","name":"Danish krone","code":"DKK","flag":"https://restcountries.eu/data/grl.svg"},{"value":"GD","name":"East Caribbean dollar","code":"XCD","flag":"https://restcountries.eu/data/grd.svg"},{"value":"GP","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/glp.svg"},{"value":"GU","name":"United States dollar","code":"USD","flag":"https://restcountries.eu/data/gum.svg"},{"value":"GT","name":"Guatemalan quetzal","code":"GTQ","flag":"https://restcountries.eu/data/gtm.svg"},{"value":"GG","name":"British pound","code":"GBP","flag":"https://restcountries.eu/data/ggy.svg"},{"value":"GN","name":"Guinean franc","code":"GNF","flag":"https://restcountries.eu/data/gin.svg"},{"value":"GW","name":"West African CFA franc","code":"XOF","flag":"https://restcountries.eu/data/gnb.svg"},{"value":"GY","name":"Guyanese dollar","code":"GYD","flag":"https://restcountries.eu/data/guy.svg"},{"value":"HT","name":"Haitian gourde","code":"HTG","flag":"https://restcountries.eu/data/hti.svg"},{"value":"HM","name":"Australian dollar","code":"AUD","flag":"https://restcountries.eu/data/hmd.svg"},{"value":"VA","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/vat.svg"},{"value":"HN","name":"Honduran lempira","code":"HNL","flag":"https://restcountries.eu/data/hnd.svg"},{"value":"HK","name":"Hong Kong dollar","code":"HKD","flag":"https://restcountries.eu/data/hkg.svg"},{"value":"HU","name":"Hungarian forint","code":"HUF","flag":"https://restcountries.eu/data/hun.svg"},{"value":"IS","name":"Icelandic króna","code":"ISK","flag":"https://restcountries.eu/data/isl.svg"},{"value":"IN","name":"Indian rupee","code":"INR","flag":"https://restcountries.eu/data/ind.svg"},{"value":"ID","name":"Indonesian rupiah","code":"IDR","flag":"https://restcountries.eu/data/idn.svg"},{"value":"CI","name":"West African CFA franc","code":"XOF","flag":"https://restcountries.eu/data/civ.svg"},{"value":"IR","name":"Iranian rial","code":"IRR","flag":"https://restcountries.eu/data/irn.svg"},{"value":"IQ","name":"Iraqi dinar","code":"IQD","flag":"https://restcountries.eu/data/irq.svg"},{"value":"IE","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/irl.svg"},{"value":"IM","name":"British pound","code":"GBP","flag":"https://restcountries.eu/data/imn.svg"},{"value":"IL","name":"Israeli new shekel","code":"ILS","flag":"https://restcountries.eu/data/isr.svg"},{"value":"IT","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/ita.svg"},{"value":"JM","name":"Jamaican dollar","code":"JMD","flag":"https://restcountries.eu/data/jam.svg"},{"value":"JP","name":"Japanese yen","code":"JPY","flag":"https://restcountries.eu/data/jpn.svg"},{"value":"JE","name":"British pound","code":"GBP","flag":"https://restcountries.eu/data/jey.svg"},{"value":"JO","name":"Jordanian dinar","code":"JOD","flag":"https://restcountries.eu/data/jor.svg"},{"value":"KZ","name":"Kazakhstani tenge","code":"KZT","flag":"https://restcountries.eu/data/kaz.svg"},{"value":"KE","name":"Kenyan shilling","code":"KES","flag":"https://restcountries.eu/data/ken.svg"},{"value":"KI","name":"Australian dollar","code":"AUD","flag":"https://restcountries.eu/data/kir.svg"},{"value":"KW","name":"Kuwaiti dinar","code":"KWD","flag":"https://restcountries.eu/data/kwt.svg"},{"value":"KG","name":"Kyrgyzstani som","code":"KGS","flag":"https://restcountries.eu/data/kgz.svg"},{"value":"LA","name":"Lao kip","code":"LAK","flag":"https://restcountries.eu/data/lao.svg"},{"value":"LV","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/lva.svg"},{"value":"LB","name":"Lebanese pound","code":"LBP","flag":"https://restcountries.eu/data/lbn.svg"},{"value":"LS","name":"Lesotho loti","code":"LSL","flag":"https://restcountries.eu/data/lso.svg"},{"value":"LR","name":"Liberian dollar","code":"LRD","flag":"https://restcountries.eu/data/lbr.svg"},{"value":"LY","name":"Libyan dinar","code":"LYD","flag":"https://restcountries.eu/data/lby.svg"},{"value":"LI","name":"Swiss franc","code":"CHF","flag":"https://restcountries.eu/data/lie.svg"},{"value":"LT","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/ltu.svg"},{"value":"LU","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/lux.svg"},{"value":"MO","name":"Macanese pataca","code":"MOP","flag":"https://restcountries.eu/data/mac.svg"},{"value":"MK","name":"Macedonian denar","code":"MKD","flag":"https://restcountries.eu/data/mkd.svg"},{"value":"MG","name":"Malagasy ariary","code":"MGA","flag":"https://restcountries.eu/data/mdg.svg"},{"value":"MW","name":"Malawian kwacha","code":"MWK","flag":"https://restcountries.eu/data/mwi.svg"},{"value":"MY","name":"Malaysian ringgit","code":"MYR","flag":"https://restcountries.eu/data/mys.svg"},{"value":"MV","name":"Maldivian rufiyaa","code":"MVR","flag":"https://restcountries.eu/data/mdv.svg"},{"value":"ML","name":"West African CFA franc","code":"XOF","flag":"https://restcountries.eu/data/mli.svg"},{"value":"MT","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/mlt.svg"},{"value":"MH","name":"United States dollar","code":"USD","flag":"https://restcountries.eu/data/mhl.svg"},{"value":"MQ","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/mtq.svg"},{"value":"MR","name":"Mauritanian ouguiya","code":"MRO","flag":"https://restcountries.eu/data/mrt.svg"},{"value":"MU","name":"Mauritian rupee","code":"MUR","flag":"https://restcountries.eu/data/mus.svg"},{"value":"YT","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/myt.svg"},{"value":"MX","name":"Mexican peso","code":"MXN","flag":"https://restcountries.eu/data/mex.svg"},{"value":"FM","name":"[D]","code":null,"flag":"https://restcountries.eu/data/fsm.svg"},{"value":"MD","name":"Moldovan leu","code":"MDL","flag":"https://restcountries.eu/data/mda.svg"},{"value":"MC","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/mco.svg"},{"value":"MN","name":"Mongolian tögrög","code":"MNT","flag":"https://restcountries.eu/data/mng.svg"},{"value":"ME","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/mne.svg"},{"value":"MS","name":"East Caribbean dollar","code":"XCD","flag":"https://restcountries.eu/data/msr.svg"},{"value":"MA","name":"Moroccan dirham","code":"MAD","flag":"https://restcountries.eu/data/mar.svg"},{"value":"MZ","name":"Mozambican metical","code":"MZN","flag":"https://restcountries.eu/data/moz.svg"},{"value":"MM","name":"Burmese kyat","code":"MMK","flag":"https://restcountries.eu/data/mmr.svg"},{"value":"NA","name":"Namibian dollar","code":"NAD","flag":"https://restcountries.eu/data/nam.svg"},{"value":"NR","name":"Australian dollar","code":"AUD","flag":"https://restcountries.eu/data/nru.svg"},{"value":"NP","name":"Nepalese rupee","code":"NPR","flag":"https://restcountries.eu/data/npl.svg"},{"value":"NL","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/nld.svg"},{"value":"NC","name":"CFP franc","code":"XPF","flag":"https://restcountries.eu/data/ncl.svg"},{"value":"NZ","name":"New Zealand dollar","code":"NZD","flag":"https://restcountries.eu/data/nzl.svg"},{"value":"NI","name":"Nicaraguan córdoba","code":"NIO","flag":"https://restcountries.eu/data/nic.svg"},{"value":"NE","name":"West African CFA franc","code":"XOF","flag":"https://restcountries.eu/data/ner.svg"},{"value":"NG","name":"Nigerian naira","code":"NGN","flag":"https://restcountries.eu/data/nga.svg"},{"value":"NU","name":"New Zealand dollar","code":"NZD","flag":"https://restcountries.eu/data/niu.svg"},{"value":"NF","name":"Australian dollar","code":"AUD","flag":"https://restcountries.eu/data/nfk.svg"},{"value":"KP","name":"North Korean won","code":"KPW","flag":"https://restcountries.eu/data/prk.svg"},{"value":"MP","name":"United States dollar","code":"USD","flag":"https://restcountries.eu/data/mnp.svg"},{"value":"NO","name":"Norwegian krone","code":"NOK","flag":"https://restcountries.eu/data/nor.svg"},{"value":"OM","name":"Omani rial","code":"OMR","flag":"https://restcountries.eu/data/omn.svg"},{"value":"PK","name":"Pakistani rupee","code":"PKR","flag":"https://restcountries.eu/data/pak.svg"},{"value":"PW","name":"[E]","code":"(none)","flag":"https://restcountries.eu/data/plw.svg"},{"value":"PS","name":"Israeli new sheqel","code":"ILS","flag":"https://restcountries.eu/data/pse.svg"},{"value":"PA","name":"Panamanian balboa","code":"PAB","flag":"https://restcountries.eu/data/pan.svg"},{"value":"PG","name":"Papua New Guinean kina","code":"PGK","flag":"https://restcountries.eu/data/png.svg"},{"value":"PY","name":"Paraguayan guaraní","code":"PYG","flag":"https://restcountries.eu/data/pry.svg"},{"value":"PE","name":"Peruvian sol","code":"PEN","flag":"https://restcountries.eu/data/per.svg"},{"value":"PH","name":"Philippine peso","code":"PHP","flag":"https://restcountries.eu/data/phl.svg"},{"value":"PN","name":"New Zealand dollar","code":"NZD","flag":"https://restcountries.eu/data/pcn.svg"},{"value":"PL","name":"Polish złoty","code":"PLN","flag":"https://restcountries.eu/data/pol.svg"},{"value":"PT","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/prt.svg"},{"value":"PR","name":"United States dollar","code":"USD","flag":"https://restcountries.eu/data/pri.svg"},{"value":"QA","name":"Qatari riyal","code":"QAR","flag":"https://restcountries.eu/data/qat.svg"},{"value":"XK","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/kos.svg"},{"value":"RE","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/reu.svg"},{"value":"RO","name":"Romanian leu","code":"RON","flag":"https://restcountries.eu/data/rou.svg"},{"value":"RU","name":"Russian ruble","code":"RUB","flag":"https://restcountries.eu/data/rus.svg"},{"value":"RW","name":"Rwandan franc","code":"RWF","flag":"https://restcountries.eu/data/rwa.svg"},{"value":"BL","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/blm.svg"},{"value":"SH","name":"Saint Helena pound","code":"SHP","flag":"https://restcountries.eu/data/shn.svg"},{"value":"KN","name":"East Caribbean dollar","code":"XCD","flag":"https://restcountries.eu/data/kna.svg"},{"value":"LC","name":"East Caribbean dollar","code":"XCD","flag":"https://restcountries.eu/data/lca.svg"},{"value":"MF","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/maf.svg"},{"value":"PM","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/spm.svg"},{"value":"VC","name":"East Caribbean dollar","code":"XCD","flag":"https://restcountries.eu/data/vct.svg"},{"value":"WS","name":"Samoan tālā","code":"WST","flag":"https://restcountries.eu/data/wsm.svg"},{"value":"SM","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/smr.svg"},{"value":"ST","name":"São Tomé and Príncipe dobra","code":"STD","flag":"https://restcountries.eu/data/stp.svg"},{"value":"SA","name":"Saudi riyal","code":"SAR","flag":"https://restcountries.eu/data/sau.svg"},{"value":"SN","name":"West African CFA franc","code":"XOF","flag":"https://restcountries.eu/data/sen.svg"},{"value":"RS","name":"Serbian dinar","code":"RSD","flag":"https://restcountries.eu/data/srb.svg"},{"value":"SC","name":"Seychellois rupee","code":"SCR","flag":"https://restcountries.eu/data/syc.svg"},{"value":"SL","name":"Sierra Leonean leone","code":"SLL","flag":"https://restcountries.eu/data/sle.svg"},{"value":"SG","name":"Brunei dollar","code":"BND","flag":"https://restcountries.eu/data/sgp.svg"},{"value":"SX","name":"Netherlands Antillean guilder","code":"ANG","flag":"https://restcountries.eu/data/sxm.svg"},{"value":"SK","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/svk.svg"},{"value":"SI","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/svn.svg"},{"value":"SB","name":"Solomon Islands dollar","code":"SBD","flag":"https://restcountries.eu/data/slb.svg"},{"value":"SO","name":"Somali shilling","code":"SOS","flag":"https://restcountries.eu/data/som.svg"},{"value":"ZA","name":"South African rand","code":"ZAR","flag":"https://restcountries.eu/data/zaf.svg"},{"value":"GS","name":"British pound","code":"GBP","flag":"https://restcountries.eu/data/sgs.svg"},{"value":"KR","name":"South Korean won","code":"KRW","flag":"https://restcountries.eu/data/kor.svg"},{"value":"SS","name":"South Sudanese pound","code":"SSP","flag":"https://restcountries.eu/data/ssd.svg"},{"value":"ES","name":"Euro","code":"EUR","flag":"https://restcountries.eu/data/esp.svg"},{"value":"LK","name":"Sri Lankan rupee","code":"LKR","flag":"https://restcountries.eu/data/lka.svg"},{"value":"SD","name":"Sudanese pound","code":"SDG","flag":"https://restcountries.eu/data/sdn.svg"},{"value":"SR","name":"Surinamese dollar","code":"SRD","flag":"https://restcountries.eu/data/sur.svg"},{"value":"SJ","name":"Norwegian krone","code":"NOK","flag":"https://restcountries.eu/data/sjm.svg"},{"value":"SZ","name":"Swazi lilangeni","code":"SZL","flag":"https://restcountries.eu/data/swz.svg"},{"value":"SE","name":"Swedish krona","code":"SEK","flag":"https://restcountries.eu/data/swe.svg"},{"value":"CH","name":"Swiss franc","code":"CHF","flag":"https://restcountries.eu/data/che.svg"},{"value":"SY","name":"Syrian pound","code":"SYP","flag":"https://restcountries.eu/data/syr.svg"},{"value":"TW","name":"New Taiwan dollar","code":"TWD","flag":"https://restcountries.eu/data/twn.svg"},{"value":"TJ","name":"Tajikistani somoni","code":"TJS","flag":"https://restcountries.eu/data/tjk.svg"},{"value":"TZ","name":"Tanzanian shilling","code":"TZS","flag":"https://restcountries.eu/data/tza.svg"},{"value":"TH","name":"Thai baht","code":"THB","flag":"https://restcountries.eu/data/tha.svg"},{"value":"TL","name":"United States dollar","code":"USD","flag":"https://restcountries.eu/data/tls.svg"},{"value":"TG","name":"West African CFA franc","code":"XOF","flag":"https://restcountries.eu/data/tgo.svg"},{"value":"TK","name":"New Zealand dollar","code":"NZD","flag":"https://restcountries.eu/data/tkl.svg"},{"value":"TO","name":"Tongan paʻanga","code":"TOP","flag":"https://restcountries.eu/data/ton.svg"},{"value":"TT","name":"Trinidad and Tobago dollar","code":"TTD","flag":"https://restcountries.eu/data/tto.svg"},{"value":"TN","name":"Tunisian dinar","code":"TND","flag":"https://restcountries.eu/data/tun.svg"},{"value":"TR","name":"Turkish lira","code":"TRY","flag":"https://restcountries.eu/data/tur.svg"},{"value":"TM","name":"Turkmenistan manat","code":"TMT","flag":"https://restcountries.eu/data/tkm.svg"},{"value":"TC","name":"United States dollar","code":"USD","flag":"https://restcountries.eu/data/tca.svg"},{"value":"TV","name":"Australian dollar","code":"AUD","flag":"https://restcountries.eu/data/tuv.svg"},{"value":"UG","name":"Ugandan shilling","code":"UGX","flag":"https://restcountries.eu/data/uga.svg"},{"value":"UA","name":"Ukrainian hryvnia","code":"UAH","flag":"https://restcountries.eu/data/ukr.svg"},{"value":"AE","name":"United Arab Emirates dirham","code":"AED","flag":"https://restcountries.eu/data/are.svg"},{"value":"GB","name":"British pound","code":"GBP","flag":"https://restcountries.eu/data/gbr.svg"},{"value":"US","name":"United States dollar","code":"USD","flag":"https://restcountries.eu/data/usa.svg"},{"value":"UY","name":"Uruguayan peso","code":"UYU","flag":"https://restcountries.eu/data/ury.svg"},{"value":"UZ","name":"Uzbekistani so'm","code":"UZS","flag":"https://restcountries.eu/data/uzb.svg"},{"value":"VU","name":"Vanuatu vatu","code":"VUV","flag":"https://restcountries.eu/data/vut.svg"},{"value":"VE","name":"Venezuelan bolívar","code":"VEF","flag":"https://restcountries.eu/data/ven.svg"},{"value":"VN","name":"Vietnamese đồng","code":"VND","flag":"https://restcountries.eu/data/vnm.svg"},{"value":"WF","name":"CFP franc","code":"XPF","flag":"https://restcountries.eu/data/wlf.svg"},{"value":"EH","name":"Moroccan dirham","code":"MAD","flag":"https://restcountries.eu/data/esh.svg"},{"value":"YE","name":"Yemeni rial","code":"YER","flag":"https://restcountries.eu/data/yem.svg"},{"value":"ZM","name":"Zambian kwacha","code":"ZMW","flag":"https://restcountries.eu/data/zmb.svg"},{"value":"ZW","name":"Botswana pula","code":"BWP","flag":"https://restcountries.eu/data/zwe.svg"}],
          selected_currency: '',
          selected_currency_name: '',
          selected_currency_code: '',
          amount: 1000,
          deposit_methods: [
            {
                value : 'CREDIT_CARD',
                name : 'Credit Card'
            },
            {
                value : 'WIRE',
                name : 'Bank Transfer'
            }
          ],
          selected_deposit_method: 'WIRE',
          options_destination_coins: [],
          selected_destination_coin: 'DOGE',
          sort_by: 'cheapest',
          top_page_msg: 0
        }   
    },
    watch: {
      sort_by: function(val, oldVal) {
        this.sort(val);
      },
      selected_currency: function(val, oldVal) {
        this.selected_currency_name = this.options_currencys.find(option => option.value === val).name;
        this.selected_currency_code = this.options_currencys.find(option => option.value === val).code;
        this.setCookieData();
        this.getExchanges();
      },
      amount: function(val, oldVal) {
        this.setCookieData();
        this.getExchanges();
      },
      selected_deposit_method: function(val, oldVal) {
        this.setCookieData();
        this.getExchanges();
      },
      selected_destination_coin: function(val, oldVal) {
        this.setCookieData();
        this.getExchanges();
      }
    },
    methods: {
        sort: function(by) {
          if (by == 'cheapest') {
            this.exchanges.sort((a, b) => { return b.exchangedAmount - a.exchangedAmount;});
          } else if (by == 'l_fees') {
            this.exchanges.sort((a, b) => { return a.feeAmount - b.feeAmount;});
          } else if (by == 'coin_p') {
            this.exchanges.sort((a, b) => { return b.coinPrice - a.coinPrice;});
          } else if (by == 'rating') {
            this.exchanges.sort((a, b) => { return b.exchange.rating - a.exchange.rating;});
          }
        },
        setCustomSelected: function(el, val) {
          this[el] = val;
        },
        setCookieData: function() {
            var cookie = {
                selected_country: this.selected_country,
                selected_currency: this.selected_currency,
                amount: this.amount,
                selected_deposit_method: this.selected_deposit_method,
                selected_destination_coin: this.selected_destination_coin
            };
            $cookies.set('searchParams', JSON.stringify(cookie));
        },
        getCookieData: function() {
            var cookie = $cookies.get('searchParams');
            var selected_currency = '';
            this.selected_country = cookie.selected_country;
            if (!cookie.selected_country){
              axios
                .get('https://ipapi.co/json/')
                .then(response => {
                    this.selected_country = response.data.country;
                    this.selected_country_name = this.countrys.find(option => option.value === response.data.country).name;
                    selected_currency = response.data.countryCode;
                });
            }
            this.selected_currency = cookie.selected_currency;
            if (!cookie.selected_currency){
              this.selected_currency = selected_currency;
            }
            this.amount = cookie.amount;
            if (!cookie.amount){
              this.amount = 1000;
            }
            this.selected_deposit_method = cookie.selected_deposit_method;
            if (!cookie.selected_deposit_method){
              this.selected_deposit_method = 'WIRE';
            }
            this.selected_destination_coin = cookie.selected_destination_coin;
            if (!cookie.selected_destination_coin){
              this.selected_destination_coin = 'BTC';
            }
        },
        getExchanges: function() {
          $('.table-wrap').addClass('loading');
          var currence_code3 = this.options_currencys.find(option => option.value === this.selected_currency).code;
          if(!this.amount) {
            this.amount = 0
          }
          axios
            .get('http://api.ers.takasho.work/exchange-rates?countryCode='+this.selected_country+'&cryptoCurrencyCode='+this.selected_destination_coin+'&fiatCurrencyCode='+currence_code3+'&depositMethodType='+this.selected_deposit_method+'&amount='+this.amount)
            .then(response => {
              if (response.data) {
                this.exchanges = response.data;
                if(Object.keys(response.data).length != 0) {
                  this.sort(this.sort_by);
                  $('.table-wrap').removeClass('loading');
                } else {
                  setTimeout(function () {
                    $('.top-page-msg').addClass('remove');
                  }, 5500);
                  this.top_page_msg = 1;
                  this.selected_currency_code = 'EUR';
                }
                var vm = this;
                setTimeout(function () {
                  vm.$lazyLoadInstance.update();
                }, 1);
              }
              if (response.data.errors) {
                var errores = [];
                for(var index in response.data.errors) {
                  errores.push(response.data.errors[index].title);
                }
                throw (errores);
              }
            })
            .catch(error => {
            })
        },
        getAllCoins: function() {
          axios
            .get('http://api.ers.takasho.work/cryptoCurrencies?page=0&size=' + Number.MAX_SAFE_INTEGER)
            .then(response => {
              if (response.data) {
                this.options_destination_coins = response.data._embedded.cryptoCurrencies;
                this.customSelectInit();
              }
              if (response.data.errors) {
                var errores = [];
                for(var index in response.data.errors) {
                  errores.push(response.data.errors[index].title);
                }
                throw (errores);
              }
            })
            .catch(error => {
            })
        },
        customSelectInit: function() {
            var vm = this;
            $(document).ready(function () {
              $('.form-custom-select-elem').click(function () {
                var parent = $(this).closest('.form-custom-select');
                var chosen = parent.find('.form-custom-select-chosen-name');
                var elRadio = $(this).find('.form-custom-select-elem-radio').val();
                var elName = $(this).find('.form-custom-select-elem-name').text();
                var elShortName = $(this).find('.form-custom-select-elem-short').text();
                var elChenged = $(this).find('.form-custom-select-elem-radio').data('el-chenged');
                vm.setCustomSelected(elChenged, elRadio);
                $(this).addClass('active').siblings().removeClass('active');
                parent.removeClass('active');
                parent.find('.form-custom-select-dd').fadeOut();
            
                if (parent.find('.form-custom-select-elem-short').length) {
                  chosen.html(elShortName);
                } else {
                  chosen.html(elName);
                }
              });
            });
        }
    },
    mounted() {
        this.getCookieData();
        this.contry_name = this.countrys.find(option => option.value === this.selected_country).name;
        this.getAllCoins();
        this.getExchanges();
        this.customSelectInit();
    }
});