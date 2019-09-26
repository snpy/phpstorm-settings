#if (${STATIC} == "static")
#else
/** @return $this */
#end
${STATIC} public function set${NAME}($${PARAM_NAME})
{
#if (${STATIC} == "static")
    static::$${FIELD_NAME} = $${PARAM_NAME};
#else
    $this->${FIELD_NAME} = $${PARAM_NAME};
    
    return $this;
#end
}
