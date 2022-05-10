const RUTA_SERVIDOR = "ruta";
const manejarRespuesta = (respuesta) => {
  // Manejar respuesta como se necesite. Yo lo hago así:
  if (respuesta.error) {
    throw new Error(JSON.stringify(respuesta.error));
  }
  return respuesta.data;
};

export const HttpClient = {
  post: (ruta, datos) => axios(RUTA_SERVIDOR + ruta, {
    credentials: 'include',
    method: 'POST',
    body: JSON.stringify(datos),
  })
    .then(r => r.json())
    .then(manejarRespuesta),
  put: (ruta, datos) => axios(RUTA_SERVIDOR + ruta, {
    credentials: 'include',
    method: 'PUT',
    body: JSON.stringify(datos),
  })
    .then(r => r.json())
    .then(manejarRespuesta),
  get: ruta => axios(RUTA_SERVIDOR + ruta, {
    credentials: 'include',
  })
    .then(r => r.json())
    .then(manejarRespuesta),
  delete: ruta => axios(RUTA_SERVIDOR + ruta, {
    credentials: 'include',
    method: 'DELETE',
  })
    .then(r => r.json())
    .then(manejarRespuesta),
};

export default { HttpClient };