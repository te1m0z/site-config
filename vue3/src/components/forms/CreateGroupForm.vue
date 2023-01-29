<template>
    <form class='form' @submit.prevent=''>
        <InputGroup direction='row'>
            <InputText type='text' label='Название' />
        </InputGroup>
        <FormButton action='create'>Создать</FormButton>
    </form>
</template>

<script>
import InputText from '@/components/UI/InputText.vue'
import InputGroup from '@/components/UI/InputGroup.vue'
import FormButton from '@/components/UI/FormButton.vue'

export default {
    name: 'CreateGroupForm',
    components: { FormButton, InputGroup, InputText }
}
</script>

<style scoped>

</style>