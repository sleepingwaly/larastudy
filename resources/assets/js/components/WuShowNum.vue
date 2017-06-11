<template>
    <div class="wu-show-num">
        每页显示
        <a v-for="n in num" :class="{'on':currNum==n}" @click="showNum(n)">{{n}}</a>
        条数据
    </div>
</template>
<style scoped>
    .wu-show-num a{
        text-decoration: underline;
        color: #c2cad8;
        cursor: pointer;
        margin: 0 3px;
    }
    .wu-show-num a.on{
        text-decoration: none;
    }
</style>

<script>
    import UrlParse from 'url-parse'
    import QueryString from 'querystring'
    export default{
        data () {
            return {
                'currNum': 20
            }
        },
        created () {
            let url = UrlParse(window.location.href)
            let qs = QueryString.parse(url.query.substring(1))
            this.currNum = qs.num || 20
        },
        props: {
            num: {
                type: Array,
                default: function() {
                    return [10,20,50]
                }
            }
        },
        methods: {
            showNum (num) {
                if(this.currNum==num){
                    return
                }
                this.currNum = num
                let url = UrlParse(window.location.href)
                let qs = QueryString.parse(url.query.substring(1))
                qs.num = num
                let queryStr = QueryString.stringify(qs)
                let toUrl = url.origin+url.pathname+'?'+queryStr+url.hash
                window.location.href = toUrl
            }
        }
    }
</script>