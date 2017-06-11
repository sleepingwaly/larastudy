<template>
    <div class="wu-search-input">
        <input type="text" v-model="keyword" @keyup.enter="search" placeholder="关键字" class="input">
        <span class="am-icon am-icon-search" @click="search"></span>
    </div>
</template>
<style scoped>
    .wu-search-input{
        display: flex;
        justify-content: space-between;
    }
    .wu-search-input .am-icon-search{
        top:0;
        border-bottom: 1px solid #c2cad8;
        cursor: pointer;
        padding: 0 .5rem;
    }
    .input{
        display: flex;
        flex-grow: 1;
        line-height: 1.42857;
        background: transparent;
        outline: none;
        -webkit-transition: border-color ease-in-out 0.15s;
        -o-transition: border-color ease-in-out 0.15s;
        transition: border-color ease-in-out 0.15s;
        border: 0;
        border-bottom: 1px solid #c2cad8;
        color: #555;
        padding-left:.5rem;
        font-size: 14px;
    }
</style>

<script>
    import UrlParse from 'url-parse'
    import QueryString from 'querystring'
    export default{
        data () {
            return {
                keyword: ''
            }
        },
        created () {
            let url = UrlParse(window.location.href)
            let qs = QueryString.parse(url.query.substring(1))
            this.keyword = qs.keyword || ''
        },
        methods: {
            search () {
                let url = UrlParse(window.location.href)
                let qs = QueryString.parse(url.query.substring(1))
                qs.keyword = this.keyword
                let queryStr = QueryString.stringify(qs)
                let toUrl = url.origin+url.pathname+'?'+queryStr+url.hash
                window.location.href = toUrl
            }
        }
    }
</script>