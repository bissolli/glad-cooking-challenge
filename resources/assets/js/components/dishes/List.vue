<template>
    <div>
        <div class="box-filter form_horizontal m_bottom_20">
            <div class="form_group m_top_0 text_right">
                <label for="search" class="form_label f_size_14 text_gray"> <strong>SEARCH:</strong></label>
                <div class="form_control bg_none">
                    <input v-model="listConfig.filter" id="search" class="yellow_field b_none f_size_14" placeholder="NAME/CONTESTANT NO.">
                </div>
            </div>
        </div>
        <paginate name="dishes" :list="list" :per="6" class="dishes_list">
            <li v-for="item in paginated('dishes')" class="dish" @click.prevent="show(item)">
                <div class="likes">
                    <span>43 likes</span>
                    <span class="btn btn_red">&hearts;</span>
                </div>
                <div class="photo_item" :style="`background-image: url(${item.photo})`">
                    <div class="dish_desc">
                        {{ item.name }}<br>
                        Entry no. {{ item.id }}
                        <img src="images/search.png" alt="">
                    </div>
                </div>
            </li>
        </paginate>
        <div class="text_center" v-if="!list.length">
            No records found...
        </div>
        <paginate-links class="m_top_20" for="dishes" :show-step-links="true" :limit="2"></paginate-links>
    </div>
</template>

<script>
    import {orderBy, filter, forEach, isEmpty} from 'lodash'
    import {sanitizeAndLower} from '../../utils/strings'

    export default {
        props: [ 'items' ],
        data () {
            return {
                paginate: ['dishes'],
                listConfig: {
                    filter: '',
                    orderProp: 'name',
                    orderDir: 'asc',
                    columns: ['name', 'description', 'id']
                }
            }
        },
        computed: {
            list () {
                return this.doOrderList(this.items)
            }
        },
        methods: {
            doOrderList (records) {
                const search = sanitizeAndLower(this.listConfig.filter)
                const list = orderBy(records, [this.listConfig.orderProp], [this.listConfig.orderDir])

                if (isEmpty(search))
                    return list

                return filter(list, response => {
                    let result = false
                    forEach(this.listConfig.columns, column => {
                        if (sanitizeAndLower(response[column]).indexOf(search) >= 0)
                            result = true
                    })
                    return result
                })
            },
            show (item) {
                this.$emit('showDish', item)
            }
        }
    }
</script>
