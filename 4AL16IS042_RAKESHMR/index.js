const fastify = require('fastify')({
    logger: true,
});

const path = require('path');
const cors = require('cors');
// const appConfig = require('./config/app.config.json');
const packageJSON = require('./package.json');
// const routesRegister = require('./config/routers-register.json');

fastify.use(cors());

fastify.get('/info', (req, res) => {
    res.send({
        name: packageJSON.name,
        version: packageJSON.version,
        description: packageJSON.description,
    });
});

// routesRegister.forEach((route) => fastify.register(require(path.resolve(__dirname, route))));

global.rootDir = __dirname;

fastify.setNotFoundHandler((request, reply) => {
    reply.code(403).type('application/json').send({
        statusCode: 403,
        status: 403,
        message: 'Forbidden',
    });
});

(async () => {
    fastify.listen(53006, api.prv, (err, address) => {
        if (err) {
            fastify.log.error(err);
            process.exit(1);
        }
        fastify.swagger();
        fastify.log.info(`Environment is:' ${process.env.NODE_ENV}`);
        fastify.log.info(`server listening on ${address}`);
        fastify.log.info(`Browse your REST API at %s%s ${address}/explorer`);
    });
})();
