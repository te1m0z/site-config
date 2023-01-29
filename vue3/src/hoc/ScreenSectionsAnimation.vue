<template>
    <TransitionGroup
        appear
        tag='div'
        :css='false'
        mode='out-in'
        @enter='onEnter'
        class='screen-sections'
    >
        <slot></slot>
    </TransitionGroup>
</template>

<script>
import gsap from 'gsap'

export default {
    name: 'ScreenSectionsAnimation',
    props: {
        type: String,
        className: {
            type: String
        }
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
                    x: '+=30'
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
                    y: '+=15'
                },
                to: {
                    y: '0'
                }
            }
        }
    },
    methods: {
        onEnter(el, done) {
            gsap.fromTo(el, {
                opacity: 0,
                ...this[this.type].from
            }, {
                opacity: 1,
                delay: el.dataset.index * 0.3,
                onComplete: done,
                ...this[this.type].to
            })
        }
    }
}
</script>

<style lang='scss'>
.screen-sections {
    display: flex;
    flex-flow: column nowrap;
    align-items: center;
    width: 100%;
}
</style>