<template>
    <div class="list_container">
        <div class="box_left">
            <a href="/" class="logo p_20">
                <img src="/images/logo-min.png" alt="">
            </a>
        </div>
        <div class="box_right m_right_20 m_left_20 p_50">
            <a href="/" class="logo text_center hide">
                <img src="/images/logo-min.png" alt="">
            </a>
            <h1 class="text_center header_can_cook">
                <span>So you think you can cook?</span>
                <a href="/dishes/create" class="btn btn_red submit_dish">Submit your dish!</a>
            </h1>
            <h2 class="text_center text_uppercase f_size_29">
                COMPETITION GALLERY
                <small class="d_block f_size_21 m_top_5">Vote for your favorite dish or submit your own</small>
            </h2>
            <list :items="items" @showDish="show"></list>
        </div>
        <show :item="showing" @closeIt="close"></show>
    </div>
</template>

<script>
    import List from './List.vue'
    import Show from './Show.vue'

    export default {
        props: [ 'items' ],
        components: {
            List,
            Show
        },
        data () {
            return {
                showing: null
            }
        },
        methods: {
            show (dish) {
                this.showing = dish
            },
            close () {
                this.showing = null
            }
        }
    }
</script>
