const {
    createPool
} = require('mysql');

const pool = createPool ({
    host: "localhost",
    user:"root",
    password:"",
    database: "hotel",
    connectionLimit:10
})

pool.query(`select * from rooms`,(err, result,fields)=>{
    if(err){
        return console.log(err);
    }
    return console.log(result)
})