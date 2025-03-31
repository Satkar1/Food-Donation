import streamlit as st

st.title("Embedded PHP Page")
st.markdown('<iframe src="http://localhost:8000" width="100%" height="600px"></iframe>', unsafe_allow_html=True)
