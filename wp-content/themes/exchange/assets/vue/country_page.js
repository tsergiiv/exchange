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
          console.log(this.country);
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