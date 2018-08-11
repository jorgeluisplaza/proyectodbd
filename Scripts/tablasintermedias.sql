CREATE TABLE usuario_servicio (
    id_usuario integer NOT NULL,
    email_usuario character varying(255),
    id_pasaje integer NOT NULL,
    id_reserva integer NOT NULL,
    id_actividad integer NOT NULL,
    id_traslado integer NOT  NULL,
    id_servicio integer NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario),
    FOREIGN KEY (id_pasaje) REFERENCES pasaje(id_pasaje),
    FOREIGN KEY (id_reserva) REFERENCES reserva(id_reserva),
    FOREIGN KEY (id_actividad) REFERENCES actividad(id_actividad),
    FOREIGN KEY (id_traslado) REFERENCES traslado(id_traslado),
    FOREIGN KEY (id_servicio) REFERENCES servicio(id_servicio),
    FOREIGN KEY (email_usuario) REFERENCES usuario(email)
);

CREATE TABLE reserva_habitacion (
    id_habitacion integer NOT NULL,
    id_reserva integer NOT NULL,
    FOREIGN KEY (id_habitacion) REFERENCES habitacion(id_habitacion),
    FOREIGN KEY (id_reserva) REFERENCES reserva(id_reserva)
);

CREATE TABLE habitacion_hotel (
    id_hotel integer NOT NULL,
    id_habitacion integer NOT NULL,
    FOREIGN KEY (id_hotel) REFERENCES hotel(id_hotel),
    FOREIGN KEY (id_habitacion) REFERENCES habitacion(id_habitacion)
);

CREATE TABLE pasaje_vuelo (
    id_pasaje integer NOT NULL,
    id_vuelo integer NOT NULL,
    FOREIGN KEY (id_pasaje) REFERENCES pasaje(id_pasaje),
    FOREIGN KEY (id_vuelo) REFERENCES vuelo(id_vuelo)
);

CREATE TABLE vuelo_avion (
    id_vuelo integer NOT NULL,
    id_avion integer NOT NULL,
    FOREIGN KEY (id_vuelo) REFERENCES vuelo(id_vuelo),
    FOREIGN KEY (id_avion) REFERENCES avion(id_avion)
);

CREATE TABLE vuelo_asiento (
    id_vuelo integer NOT NULL,
    id_asiento integer NOT NULL,
    FOREIGN KEY (id_vuelo) REFERENCES (id_vuelo),
    FOREIGN KEY (id_asiento) REFERENCES (id_asiento)
);

CREATE TABLE servicio_detalle (
    id_detalle integer NOT NULL,
    id_pasaje integer NOT NULL,
    id_reserva integer NOT NULL,
    id_actividad integer NOT NULL,
    id_traslado integer NOT  NULL,
    id_servicio integer NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario),
    FOREIGN KEY (id_pasaje) REFERENCES pasaje(id_pasaje),
    FOREIGN KEY (id_reserva) REFERENCES reserva(id_reserva),
    FOREIGN KEY (id_actividad) REFERENCES actividad(id_actividad),
    FOREIGN KEY (id_traslado) REFERENCES traslado(id_traslado),
    FOREIGN KEY (id_servicio) REFERENCES servicio(id_servicio),
    FOREIGN KEY (id_detalle) REFERENCES detalle(id_detalle)    
);

CREATE TABLE paquetehotel_reserva (
    id_paquetehotel integer NOT NULL,
    id_reserva integer NOT NULL,
    FOREIGN KEY (id_paquetehotel) REFERENCES paquete_hotel(id_paquete),
    FOREIGN KEY (id_reserva) REFERENCES reserva(id_reserva)
);

CREATE TABLE auto_paqueteauto (
    id_auto integer NOT NULL,
    id_paqueteAuto integer NOT NULL,
    FOREIGN KEY (id_auto),
    FOREIGN KEY (id_paqueteAuto)
);