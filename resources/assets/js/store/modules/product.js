//! NOTE App and AppForm is not Being Read Here So We need A Way TO initialize this Data.
const state = {

}

const getters = {

}

const actions = {

    async updateRate ({ commit, state }, { rate }) {
        commit('newForm')
        state.form.rate = rate
        try {
            const payload = await App.post(route('api.product.updateRate'), state.form)
            state.form.busy = false
            commit('newForm')
            vm.$popup({ message: payload.message, backgroundColor: '#4db6ac', delay: 10, color: '#fffffa' })
        } catch ({errors, message}) {
            state.form.errors.set(errors)
            state.form.busy = false
            commit('newForm')
            vm.$popup({ message: message, backgroundColor: '#e57373', delay: 10, color: '#fffffa' })
        }
    },
}

const mutations = {
    newForm: (state) => {
        state.form = new AppForm(App.forms.setRate)
    },
}

export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions
}
