<template>
    <transition-group
        appear
        tag="div"
        :css="false"
        @enter="onEnter"
    >
        <div
            v-for="(slot, name, index) in $slots"
            :key="name"
            :data-index="index"
        >
            {{ slot.name }}
            <slot :name="name"></slot>
        </div>
    </transition-group>
</template>

<script>
import gsap from 'gsap'

export default {
    name: "ScreenAnimation",
    props: {
        type: String
    },
    data() {
        return {
            left: {
                from: {
                    x: '-=30'
                },
                to: {
                    x: '0'
                }
            },
            right: {
                from: {
                    x: '+=60'
                },
                to: {
                    x: '0'
                }
            },
            top: {
                from: {
                    y: '-=30'
                },
                to: {
                    y: '0'
                }
            },
            bottom: {
                from: {
                    y: '+=30'
                },
                to: {
                    y: '0'
                }

            }
        }
    },
    methods: {
        onEnter( el, done ) {
            gsap.fromTo( el, {
                opacity: 0,
                ...this[this.type].from
            }, {
                opacity: 1,
                delay: el.dataset.index * 0.3,
                onComplete: done,
                ...this[this.type].to
            } )
        }
    }
}
</script>