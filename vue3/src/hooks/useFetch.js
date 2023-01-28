import { onMounted, ref } from 'vue'

export function useFetch(body) {
    const data = ref(null)
    const loading = ref(true)
    const error = ref(null)

    async function fetchData() {
        loading.value = true

        return await fetch('https://reqres.in/api/users', {
            method: 'POST',
            headers: {
                'Content-Type': 'Application/json',
            },
            body: JSON.stringify(body),
        })
            .then((res) => {
                if (!res.ok) {
                    const error = new Error(res.statusText)
                    error.json = res.json()
                    throw error
                }
                return res.json()
            })
            .then((json) => {
                data.value = json
            })
            .catch((err) => {
                error.value = err
                if (err.json) {
                    return err.json.then((json) => {
                        error.value.message = json.message
                    })
                }
            })
            .finally(() => {
                loading.value = false
            })
    }

    onMounted(() => fetchData())

    return {
        data,
        loading,
        error,
    }
}
