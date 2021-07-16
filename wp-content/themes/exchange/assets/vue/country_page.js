Vue.component('exchanges_country', {
  props: ['country'],
  template: '#country-table',
  data () {
        return {
          all_exchanges: {},
          exchanges_bassed: {
            'binance' : 'Cayman Islands',
            'luno' : 'United Kingdom',
            'kraken' : 'United States',
            'coinbase-exchange' : 'United States',
            'crypto_com' : 'Hong Kong',
            'blockchain_com' : 'Luxembourg',
            'etorox' : 'Cyprus',
            'kucoin' : 'Seychelles',
            'gate-io' : 'Cayman Islands',
            'gdax' : 'United States',
            'gate' : 'Cayman Islands'
          },
          countrys: {"AF":"Afghanistan","AX":"Åland Islands","AL":"Albania","DZ":"Algeria","AS":"American Samoa","AD":"Andorra","AO":"Angola","AI":"Anguilla","AQ":"Antarctica","AG":"Antigua and Barbuda","AR":"Argentina","AM":"Armenia","AW":"Aruba","AU":"Australia","AT":"Austria","AZ":"Azerbaijan","BS":"Bahamas","BH":"Bahrain","BD":"Bangladesh","BB":"Barbados","BY":"Belarus","BE":"Belgium","BZ":"Belize","BJ":"Benin","BM":"Bermuda","BT":"Bhutan","BO":"Bolivia (Plurinational State of)","BQ":"Bonaire, Sint Eustatius and Saba","BA":"Bosnia and Herzegovina","BW":"Botswana","BV":"Bouvet Island","BR":"Brazil","IO":"British Indian Ocean Territory","UM":"United States Minor Outlying Islands","VG":"Virgin Islands (British)","VI":"Virgin Islands (U.S.)","BN":"Brunei Darussalam","BG":"Bulgaria","BF":"Burkina Faso","BI":"Burundi","KH":"Cambodia","CM":"Cameroon","CA":"Canada","CV":"Cabo Verde","KY":"Cayman Islands","CF":"Central African Republic","TD":"Chad","CL":"Chile","CN":"China","CX":"Christmas Island","CC":"Cocos (Keeling) Islands","CO":"Colombia","KM":"Comoros","CG":"Congo","CD":"Congo (Democratic Republic of the)","CK":"Cook Islands","CR":"Costa Rica","HR":"Croatia","CU":"Cuba","CW":"Curaçao","CY":"Cyprus","CZ":"Czech Republic","DK":"Denmark","DJ":"Djibouti","DM":"Dominica","DO":"Dominican Republic","EC":"Ecuador","EG":"Egypt","SV":"El Salvador","GQ":"Equatorial Guinea","ER":"Eritrea","EE":"Estonia","ET":"Ethiopia","FK":"Falkland Islands (Malvinas)","FO":"Faroe Islands","FJ":"Fiji","FI":"Finland","FR":"France","GF":"French Guiana","PF":"French Polynesia","TF":"French Southern Territories","GA":"Gabon","GM":"Gambia","GE":"Georgia","DE":"Germany","GH":"Ghana","GI":"Gibraltar","GR":"Greece","GL":"Greenland","GD":"Grenada","GP":"Guadeloupe","GU":"Guam","GT":"Guatemala","GG":"Guernsey","GN":"Guinea","GW":"Guinea-Bissau","GY":"Guyana","HT":"Haiti","HM":"Heard Island and McDonald Islands","VA":"Holy See","HN":"Honduras","HK":"Hong Kong","HU":"Hungary","IS":"Iceland","IN":"India","ID":"Indonesia","CI":"Côte d'Ivoire","IR":"Iran (Islamic Republic of)","IQ":"Iraq","IE":"Ireland","IM":"Isle of Man","IL":"Israel","IT":"Italy","JM":"Jamaica","JP":"Japan","JE":"Jersey","JO":"Jordan","KZ":"Kazakhstan","KE":"Kenya","KI":"Kiribati","KW":"Kuwait","KG":"Kyrgyzstan","LA":"Lao People's Democratic Republic","LV":"Latvia","LB":"Lebanon","LS":"Lesotho","LR":"Liberia","LY":"Libya","LI":"Liechtenstein","LT":"Lithuania","LU":"Luxembourg","MO":"Macao","MK":"Macedonia (the former Yugoslav Republic of)","MG":"Madagascar","MW":"Malawi","MY":"Malaysia","MV":"Maldives","ML":"Mali","MT":"Malta","MH":"Marshall Islands","MQ":"Martinique","MR":"Mauritania","MU":"Mauritius","YT":"Mayotte","MX":"Mexico","FM":"Micronesia (Federated States of)","MD":"Moldova (Republic of)","MC":"Monaco","MN":"Mongolia","ME":"Montenegro","MS":"Montserrat","MA":"Morocco","MZ":"Mozambique","MM":"Myanmar","NA":"Namibia","NR":"Nauru","NP":"Nepal","NL":"Netherlands","NC":"New Caledonia","NZ":"New Zealand","NI":"Nicaragua","NE":"Niger","NG":"Nigeria","NU":"Niue","NF":"Norfolk Island","KP":"Korea (Democratic People's Republic of)","MP":"Northern Mariana Islands","NO":"Norway","OM":"Oman","PK":"Pakistan","PW":"Palau","PS":"Palestine, State of","PA":"Panama","PG":"Papua New Guinea","PY":"Paraguay","PE":"Peru","PH":"Philippines","PN":"Pitcairn","PL":"Poland","PT":"Portugal","PR":"Puerto Rico","QA":"Qatar","XK":"Republic of Kosovo","RE":"Réunion","RO":"Romania","RU":"Russian Federation","RW":"Rwanda","BL":"Saint Barthélemy","SH":"Saint Helena, Ascension and Tristan da Cunha","KN":"Saint Kitts and Nevis","LC":"Saint Lucia","MF":"Saint Martin (French part)","PM":"Saint Pierre and Miquelon","VC":"Saint Vincent and the Grenadines","WS":"Samoa","SM":"San Marino","ST":"Sao Tome and Principe","SA":"Saudi Arabia","SN":"Senegal","RS":"Serbia","SC":"Seychelles","SL":"Sierra Leone","SG":"Singapore","SX":"Sint Maarten (Dutch part)","SK":"Slovakia","SI":"Slovenia","SB":"Solomon Islands","SO":"Somalia","ZA":"South Africa","GS":"South Georgia and the South Sandwich Islands","KR":"Korea (Republic of)","SS":"South Sudan","ES":"Spain","LK":"Sri Lanka","SD":"Sudan","SR":"Suriname","SJ":"Svalbard and Jan Mayen","SZ":"Swaziland","SE":"Sweden","CH":"Switzerland","SY":"Syrian Arab Republic","TW":"Taiwan","TJ":"Tajikistan","TZ":"Tanzania, United Republic of","TH":"Thailand","TL":"Timor-Leste","TG":"Togo","TK":"Tokelau","TO":"Tonga","TT":"Trinidad and Tobago","TN":"Tunisia","TR":"Turkey","TM":"Turkmenistan","TC":"Turks and Caicos Islands","TV":"Tuvalu","UG":"Uganda","UA":"Ukraine","AE":"United Arab Emirates","GB":"United Kingdom of Great Britain and Northern Ireland","US":"United States of America","UY":"Uruguay","UZ":"Uzbekistan","VU":"Vanuatu","VE":"Venezuela (Bolivarian Republic of)","VN":"Viet Nam","WF":"Wallis and Futuna","EH":"Western Sahara","YE":"Yemen","ZM":"Zambia","ZW":"Zimbabwe"},
          promo: {
            'binance' : true,
            'luno' : true,
            'kraken' : false,
            'coinbase-exchange' : true,
            'crypto_com' : true,
            'blockchain_com' : true,
            'etorox' : true,
            'kucoin' : true,
            'gate-io' : true,
            'gdax' : true,
            'gate' : true
          },
          exchanges_country: {
            'HK' : ['luno' , 'etorox' , 'revolut', 'gdax'],
            'JP' : ['luno' , 'kucoin' , 'etorox' , 'gdax' , 'blockchain_com'],
            'MX' : ['luno' , 'revolut'],
            'IN' : ['luno' , 'gdax' , 'revolut'],
            'US' : ['luno' , 'kucoin' , 'gate' , 'crypto_com' , 'binance'],
            'NZ' : ['luno' , 'gdax' , 'revolut'],
            'CA' : ['luno' , 'etorox', 'revolut'],
            'BE' : ['etorox'],
            'SG' : ['etorox'],
            'NL' : ['gdax'],
            'DE' : ['gdax'],
            'AU' : ['gdax'],
            'GB' : ['binance']
          },
          display_n_exchanges: 3,
          display_exchanges: []
        }   
    },
    methods: {
        filter: function(crypt_id) {
            if (!this.exchanges_country[this.country].includes(crypt_id)) {
              return false;
            } else {
              return true;
            }
        },
        default_sort: function() {
            this.all_exchanges.sort((a, b) => { return b.rating - a.rating;});
        },
        getAllExchanges: function(country) {
          axios
            .get('https://api.ers.takasho.work/exchanges?page=0&size=' + Number.MAX_SAFE_INTEGER)
            .then(response => {
              if (response.data) {
                var n_exchanges = 0;
                this.all_exchanges = response.data;
                this.default_sort();
                for(var index in this.all_exchanges) {
                  if (this.filter(this.all_exchanges[index].coinGeckoId) && this.display_n_exchanges > n_exchanges) {
                    this.display_exchanges.push(
                      this.all_exchanges[index]
                    );
                    n_exchanges++;
                  }
                }
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
    },
  mounted: function () {
    this.getAllExchanges();
  },
})
var vCountryPage = new Vue({
    el: '#CountryPage',
});