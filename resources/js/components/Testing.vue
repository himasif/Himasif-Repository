<template>
  <div class="center">
    <h1>Hello World</h1>
    <hr>
    <br>
    <div class="" v-for="item in items">
      <!-- <pre>{{ beautify(item) }}</pre> -->
      <div v-if="item.type == 'file'" >
        <a v-bind:href="item.download_url">
          <i class="far fa-file"></i>
          {{ item.name }}
        </a>
      </div>
      <div v-else>
        <a href="#" v-bind:onclick="item.name">
          <i class="far fa-folder"></i>
          {{ item.name }}
        </a>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  name: 'Testing',
  data() {
    return {
      url: 'https://api.github.com/repos/himasif/Library/contents',
      items: null
    }
  },
  methods: {
    fetchData: function(url){
      let self = this;
      const req = new Request(url)

      fetch(req)
        .then((response) => {return response.json()})
        .then((data) => {
          self.items = data
        })
    },
    beautify: function(item){
      return JSON.stringify(item, null, 4);
    },
    changeDir: function(name){
      this.url += name;
      console.log(this.url);
      // this.fetchData(this.url)
    }
  },
  mounted() {
    this.fetchData(this.url)
  }
}
</script>
