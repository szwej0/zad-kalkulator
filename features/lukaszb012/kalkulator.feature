Feature: Obliczenia

  Scenario: Kalkulator a + b
    Given I am on homepage
    When I follow "Kalkulator by LukaszB012"
    And I fill in "A" with "16"
    And I fill in "B" with "12"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 28"
