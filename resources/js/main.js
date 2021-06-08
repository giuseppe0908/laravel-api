let app = new Vue({
  el: '#root',
  data: {
    fakers: [],
  },

  created() {
    axios.get('http://localhost:8001/api/randoms').then((response) => {
      this.fakers = response.data.data;
    })
  }
});
