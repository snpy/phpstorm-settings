/** @return ${TYPE_HINT} */
${STATIC} public function get${NAME}()
{
#if (${STATIC} == "static")
    return static::$${FIELD_NAME};
#else
    return $this->${FIELD_NAME};
#end
}
