const indicators = ()=> import('./components/Indicators.vue')
const estate = ()=> import('./components/estates/index.vue')
const person = ()=> import('./components/person/index.vue')
export const routes = [
    {
        name: 'indicators',
        path: '/indicators',
        component: indicators
    },
    {
        name: 'estate',
        path: '/estate',
        component: estate
    },
    {
        name: 'person',
        path: '/person',
        component: person
    }

]