Value">
					<xsl:attribute name="ma:open" namespace="{$maNSUri}">
						<xsl:value-of select="$taxonomyField/Customization/ArrayOfProperty/Property[Name='Open']/Value" />
					</xsl:attribute>
				</xsl:if>
				<xsl:if test="$taxonomyField/Customization/ArrayOfProperty/Property[Name='IsKeyword']/Value">
					<xsl:attribute name="ma:isKeyword" namespace="{$maNSUri}">
						<xsl:value-of select="$taxonomyField/Customization/ArrayOfProperty/Property[Name='IsKeyword']/Value" />
					</xsl:attribute>
				</xsl:if>
			</xsl:when>
			<xsl:otherwise>
				<xsl:if test="@DisplayName">
					<xsl:attribute name="ma:displayName" namespace="{$maNSUri}">
						<xsl:value-of select="@DisplayName" />
					</xsl:attribute>
				</xsl:if>
				<xsl:if test="@Decimals">
					<xsl:attribute name="ma:decimals" namespace="{$maNSUri}">
						<xsl:value-of select="@Decimals" />
					</xsl:attribute>
				</xsl:if>
				<xsl:if test="Default">
					<!-- semantics are different than xsd default -->
					<xsl:attribute name="ma:default" namespace="{$maNSUri}">
						<xsl:value-of select="Default" />
					</xsl:attribute>
				</xsl:if>
				<xsl:if test="@Description">
					<xsl:attribute name="ma:description" namespace="{$maNSUri}">
						<xsl:value-of select="@Description" />
					</xsl:attribute>
				</xsl:if>
				<xsl:if test="@Format">
					<xsl:attribute name="ma:format" namespace="{$maNSUri}">
						<xsl:value-of select="@Format" />
					</xsl:attribute>
				</xsl:if>
				<xsl:if test="@Hidden = 'TRUE' or @ShowInFileDlg = 'FALSE'">
					<xsl:attribute name="ma:hidden" namespace="{$maNSUri}">
						<xsl:text>true</xsl:text>
					</xsl:attribute>
				</xsl:if>
				<xsl:if test="@Indexed = 'TRUE'">
					<xsl:attribute name="ma:indexed" namespace="{$maNSUri}">
						<xsl:text>true</