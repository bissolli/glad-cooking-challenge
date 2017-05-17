<template>
    <div v-if="item !== null" class="show_container">
        <div class="box_left"></div>
        <div class="box_right m_right_20 m_left_20">
            <a href="#" class="pull_right p_bottom_10" @click.prevent="close">CLOSE X</a>
            <div class="image" :style="`background-image: url(${item.photo})`"></div>
            <div class="desc">
                <div class="chef p_10">
                    {{ item.user.name }}<br>
                    Entry no. {{ item.id }}
                </div>
                <div class="dish p_10">
                    {{ item.name }}<br>
                    {{ item.description }}
                </div>
                <div class="share p_20 text_right">
                    <span class="btn btn_red m_right_10 text_yellow">&hearts;</span>
                    <a href="#" class="btn btn_red">SHARE</a>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        props: [ 'item' ],
        methods: {
            close () {
                this.$emit('closeIt')
            }
        }
    }
</script>
