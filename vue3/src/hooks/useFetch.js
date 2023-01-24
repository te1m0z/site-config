export const useFetch = async ( data ) => {

    const state = {
        isLoading: true,
        isError: false,
        data: null,
        errorMessage: null
    }

    try {
        state.isLoading = true
        state.data = {
            success: true,
            groups: []
        }
        // await fetch( '/wp-ajax.php', {
        //     cache: false,
        //     body: JSON.stringify( data )
        // } )
        //     .then( res => {
        //         if (!res.success) {
        //             state.isError = true
        //             state.errorMessage = res.statusMessage
        //         }
        //     } )
    } catch (err) {
        state.isError = true
        state.errorMessage = 'Ошибка сервера'
    } finally {
        state.isLoading = false
    }

    return state
}
