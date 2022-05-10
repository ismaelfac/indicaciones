
export default {
    findEstate(estate) {
        console.log(estate)
        return axios.get('/findEstateAddress/'+estate).then(response => (
            (response.data)
        ))
    } 
}


