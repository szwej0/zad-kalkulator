Feature: Obliczenia

  Scenario: Objetość prostopadłościanu by bartuuus
    Given I am on homepage
    When I follow "Objetość prostopadłościanu by bartuuus"
    And I fill in "A" with "3"
    And I fill in "B" with "4"
    And I fill in "H" with "5"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 60"