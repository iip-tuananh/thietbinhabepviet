<template>
  <!-- partial -->
  <div>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" @click="listCate">Danh sách danh mục</h4>
              <p class="card-description">Thêm mới hoặc sửa chửa danh mục sản phẩm</p>
              <router-link class="nav-link" :to="{name:'add_category'}">
                <vs-button type="gradient" style="float:right;">Thêm mới</vs-button>
              </router-link>
              <vs-input
                icon="search"
                placeholder="Search"
                v-model="keyword"
                @keyup="searchCategory()"
              />
              <vs-table max-items="10" pagination :data="list">
                <template slot="thead">
                  <vs-th>ID</vs-th>
                  <vs-th>Tên</vs-th>
                  <vs-th>Avatar</vs-th>
                  <vs-th>Vị trí menu</vs-th>
                  <vs-th>Hành động</vs-th>
                </template>
                <template slot-scope="{data}">
                  <vs-tr :key="indextr" v-for="(tr, indextr) in data">
                    <vs-td :data="tr.id">{{tr.id}}</vs-td>
                    <vs-td :data="tr.name">{{JSON.parse(tr.name)[0].content}}</vs-td>
                    <vs-td :data="tr.id">
                      <vs-avatar size="70px" :src="tr.avatar" />
                    </vs-td>


                    <!-- ajax thay đổi vị trí menu -->
                  <!-- filepath: c:\laragon\www\thietbibep\resources\js\components\cate\list.vue -->
<vs-td :data="tr.id">
  <div style="position:relative;">
    <div v-if="isDuplicate(tr)" style="color:#e74c3c; font-size:12px; margin-bottom:2px;">
      ⚠️ Vị trí này đã bị trùng!
    </div>
    <vs-input
      v-model="tr.link_demo"
      @change="updateLinkDemo(tr)"
      style="width:80px"
      type="number"
      class="mauvitri"
      min="1"
      :step="1"
    />
  </div>
</vs-td>
                  <!-- ======================================== -->
                    <vs-td :data="tr.id">
                      <router-link :to="{name:'edit_category',params:{id:tr.id}}">
                        <vs-button
                          vs-type="gradient"
                          size="lagre"
                          color="success" 
                          icon="edit"
                        ></vs-button>
                      </router-link>
                      <vs-button vs-type="gradient" size="lagre" color="red" icon="delete_forever" @click="confirmDestroy(tr.id)"></vs-button>
                    </vs-td>
                  </vs-tr>
                </template>
              </vs-table>
            </div>
          </div>
        </div>
      </div>
      <vs-popup style="width:100%;" title="Thêm mới danh mục" :active.sync="popupActivo">
        <ModalAdd @closePopup="closePop($event)" />
      </vs-popup>
  </div>
</template>


<script>
import ModalAdd from "../../components/layouts/modal/category/add";

import { mapActions } from "vuex";
export default {
  data: () => ({
    keyword: null,
    popupActivo: false,
    list: [],
    timer:0,
    id_item :''
  }),
  components: {
    ModalAdd
  },
  computed: {
    
  },
  methods: {
    ...mapActions(["listCate","destroyCate", "loadings","updateSTTCategory"]),
    closePop(event) {
      this.listCategory();
      this.popupActivo = event;
    },
     isDuplicate(tr) {
    // Đếm số lượng mục có cùng link_demo (trừ chính nó)
    if (!tr.link_demo) return false;
    return this.list.filter(item => 
      item.link_demo == tr.link_demo && item.id != tr.id
    ).length > 0;
  },
    listCategory() {
      this.loadings(true);
      this.listCate({ keyword: this.keyword })
      .then(response => {
          this.loadings(false);
          this.list = response.data;
        });
    },
updateLinkDemo(tr) {
  this.loadings(true);
  this.updateSTTCategory({
    data: [{ id: tr.id, link_demo: tr.link_demo }]
  })
  .then(() => {
    this.loadings(false);
    this.$success('Cập nhật vị trí thành công');
  })
  .catch((err) => {
    this.loadings(false);
    this.$error(err.response?.data?.message || 'Vị trí đã tồn tại hoặc có lỗi!');
    this.listCategory();
  });
},
    searchCategory() {
      if (this.timer) {
        clearTimeout(this.timer);
        this.timer = null;
      }
      this.timer = setTimeout(() => {
          this.listCate({ keyword: this.keyword })
          .then(response => {
            this.list = response.data;
          });
      }, 800);
    },
    destroy(){
      this.loadings(true);
      this.destroyCate({id:this.id_item})
      .then(response => {
        this.listCategory()
        this.loadings(false);
        this.$success('Xóa danh mục thành công');
      });
    },
    confirmDestroy(id){
      this.id_item = id;
      this.$vs.dialog({
        type:'confirm',
        color: 'danger',
        title: `Bạn có chắc chắn`,
        text: 'Xóa danh mục này',
        accept:this.destroy
      })
    }
  },
  mounted() {
    this.listCategory()
  }
};
</script>
<style>
</style>